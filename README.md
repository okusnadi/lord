This is a common admin template with vue, ACE(by twitter) and lumen, to help you save time on your admin building!
### INSTALL
First, I consume that you have installed whole environment(virtualbox, laravel/homestead and lumen) for lumen

    $ git clone git@github.com:DwyaneYu/lord.git
    $ cd server
    $ sudo chmod 777 storage
    $ sudo composer require laravel/homestead --dev
    $ php vendor/bin/homestead make
    $ vi Homestead.yaml and copy the first line of ip
    $ vi /etc/hosts and add one line:
          xxx.xxx.xxx.xxx(the ip you got from last step) xxx(your project name)  
    $ config the project(.env)   
    $ vagrant up
    $ vagrant ssh(entry the virtual server)
    $ php artisan migrate
    $ php artisan db:seed
    $ exit
    $ vi server/vendor/illuminate/validation/Concerns/ValidatesAttributes.php and add one function in ValidatesAttributes:

          protected function validatePhone($attribute, $value)
          {
              return true;
          }
    $ cd ../client
    $ npm i
    $ npm install babel-preset-env --save-dev
    $ open the file "node_modules/@websanova/vue-auth/drivers/http/vue-resource.1.x.js" and add one line in the _getHeaders function before return:
        data.authorization = res.body.data.token;  
    $ npm run dev
