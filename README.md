# MATH API


## Requirements

 - PHP 7.4
 - [PHP Decimal](https://php-decimal.io/)
 - [libmpdec 2.4+](https://www.bytereef.org/mpdecimal/quickstart.html)
 - [composer](https://getcomposer.org/)
 
## Development
Please ensure requirement are met prior to launch the project (Except `libmpdec` and `PHP Decimal` if using **docker**). Click on link above to proceed with installation. 

Math API require dependency in order to work. This can be done via composer
```sh
composer install
```
or for production use
```sh
composer install --no-dev
```

After that run command :
```sh
./bin/console generate-app-secret
```
This will generate key for `APP_SECRET`. That command will generate message such as below

``[OK] Your Key is: 58fadcddfda543094b4fd83100c2dcfb``

Copy the key and paste it in file `.env` 
Example :-

``APP_SECRET=58fadcddfda543094b4fd83100c2dcfb``

Quickest way project can be launch using Symfony Local Web Server or PHP Built-in Web Server.  
> **WARNING**: This **built-in web server** is designed to aid application development. It may also be useful for testing purposes or for application demonstrations that are run in controlled environments. It is not intended to be a full-featured web server. It should not be used on a public network.

Using [Symfony CLI](https://symfony.com/doc/current/setup/symfony_server.html) or PHP Built-in Web Server to launch the project. Alternatively this project can be run via Web Service such as [Apache](https://httpd.apache.org/) or [Nginx](https://www.nginx.com/)
```sh
symfony serve
```
or
```sh
symfony server:start
```
or PHP Built-in Web Server
```sh
php -S localhost:9000 -t public/
```

## Document
API Document available via link
```http://<host>/api/doc```

## Launch Using  (with [Docker](https://www.docker.com/))
Using docker will require docker engine to be install. Please follow [step here to install](https://docs.docker.com/get-docker/). 

Please note prior to launch docker container, please run `composer install`. Launching using docker will create 2 container image base `php:7.4-fpm` and `nginx:alpine`. To build the container and run simply run command :-
```sh
docker-compose up
```

## Test using   (with [PHPUnit](https://phpunit.de/))
PHPUnit Testing Only available for Development Environment. For that purpose prior to run `phpunit` developer are 
require to install development dependency. 

To perform `phpunit`, please run command below
```sh
./vendor/bin/phpunit
```
