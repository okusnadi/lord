<?php

namespace App\Http\Controllers\Api\V1;

use Dingo\Api\Routing\Helpers;
use App\Models\User;
use Carbon\Carbon;
use App\Transformers\UserTransformer;
use Illuminate\Http\Request;
use App\Jobs\SendRegisterEmail;

use App\Http\Controllers\Controller;
use Dingo\Api\Exception\ValidationHttpException;

class BaseController extends Controller
{
    // 接口帮助调用
    use Helpers;

    // 返回错误的请求
    protected function errorBadRequest($validator)
    {
        // github like error messages
        // if you don't like this you can use code bellow
        //
        //throw new ValidationHttpException($validator->errors());

        $result = [];
        $messages = $validator->errors()->toArray();

        if ($messages) {
            foreach ($messages as $field => $errors) {
                foreach ($errors as $error) {
                    $result[] = [
                        'field' => $field,
                        'code' => $error,
                    ];
                }
            }
        }

        throw new ValidationHttpException($result);
    }

    public function createAuth(Request $request) {
      $validator = \Validator::make($request->all(), [
          'phone' => 'required|phone',
          'password' => 'required',
      ]);

      if ($validator->fails()) {
          return $this->errorBadRequest($validator);
      }

      $credentials = $request->only('phone', 'password');

      // 验证失败返回403
      $user = User::where("phone", $request->get("phone"))->first();
      if($user){
        if (! $token = \Auth::attempt($credentials)) {
            $this->response->errorUnauthorized(trans('auth.incorrect'));
        }
        $result['data'] = [
            'token' => $token,
            'expired_at' => Carbon::now()->addMinutes(config('jwt.ttl'))->toDateTimeString(),
            'refresh_expired_at' => Carbon::now()->addMinutes(config('jwt.refresh_ttl'))->toDateTimeString(),
        ];
        return $this->response->array($result)->setStatusCode(201);
      }else {


        $request['name'] = '1te2st1';
        $request['email'] = '712139@qq.com';
        $data = $request->all();
        // $req = Request::create("/api/users", "POST", $request->all());
        // $this->createUser($request);
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL,"/api/users");
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // if(curl_exec($ch) === false)
        // {
        //     echo 'Curl error: ' . curl_error($ch);
        // }
        // else
        // {
        //     echo '操作完成没有任何错误';
        // }
        // $server_output = curl_exec ($ch);
        // curl_close ($ch);
      }
    }

    public function createUser(Request $request) {
      $validator = \Validator::make($request->input(), [
          'phone' => 'required|phone|unique:users',
          'email' => 'required|email|unique:users',
          'name' => 'required|string',
          'password' => 'required',
      ]);
      if ($validator->fails()) {
          return $this->errorBadRequest($validator);
      }

      $email = $request->get('email');
      $phone = $request->get('phone');
      $password = $request->get('password');

      $attributes = [
          'email' => $email,
          'phone' => $phone,
          'name' => $request->get('name'),
          'password' => app('hash')->make($password),
      ];
      $user = User::create($attributes);
      // 用户注册成功后发送邮件
      dispatch(new SendRegisterEmail($user));

      // 201 with location
      $location = dingo_route('v1', 'users.show', $user->id);

      $result = [
          'token' => \Auth::fromUser($user),
          'expired_at' => Carbon::now()->addMinutes(config('jwt.ttl'))->toDateTimeString(),
          'refresh_expired_at' => Carbon::now()->addMinutes(config('jwt.refresh_ttl'))->toDateTimeString(),
      ];
      return $this->response->item($user, new UserTransformer())
          ->header('Location', $location)
          ->setMeta($result)
          ->setStatusCode(201);
    }
}
