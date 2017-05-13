<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
//    public function handle($request, Closure $next)
//    {
//        return $next($request)
//            ->header('Access-Control-Allow-Origin', '*')
//            ->header('Access-Control-Allow-Headers', 'Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With')
//            ->header('Access-Control-Expose-Headers', 'Authorization')
//            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
//    }
    /**
     * Access Control Headers.
     * @var array
     */
    protected $headers = [
        'Access-Control-Allow-Origin' => '*',
        'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin',
        'Access-Control-Allow-Credentials'=> 'true'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->isMethod('options')) {
            return $this->setCorsHeaders(new Response('OK', 200));
        }

        return $next($request);
    }
    /**
     * @param $response
     * @return mixed
     */
    public function setCorsHeaders($response)
    {
        foreach ($this->headers as $key => $value) {
            $response->header($key, $value);
        }
        return $response;
    }
}
