This is a common admin template with vue, ACE(by twitter) and lumen, to help you save time on your admin building!
### Usage
First, I consume that you have installed whole environment(virtualbox, laravel/homestead and lumen) for lumen
* git clone git@github.com:DwyaneYu/lord.git
* cd server
* sudo chmod 777 storage
* composer require laravel/homestead --dev
* php vendor/bin/homestead make
* vi Homestead.yaml and copy the first line of ip
* vi /etc/hosts and add one line:

      xxx.xxx.xxx.xxx(the ip you got from last step) xxx(your project name)  
* config the project(.env)   
* vagrant ssh(entry the virtual server)
* php artisan migrate
* php artisan db:seed
* exit
* vagrant up
