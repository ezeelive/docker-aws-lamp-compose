# LAMP stack built with Docker Compose in Amazon EC2

This is a basic LAMP stack environment built using Docker Compose. It consists following:

* PHP 7.1
* Apache 2.4
* MySQL 5.7
* phpMyAdmin

## Installation

Clone this repository on your local computer. Run the `docker-compose up -d`.

```shell
git clone https://github.com/ezeelive/docker-aws-lamp-compose.git
cd docker-aws-lamp-compose/
docker-aws-compose up -d
```

Your LAMP stack is now ready!! You can access it via amzon provided public url/ip.

## PHP

The installed version of PHP is 7.1.

#### Extensions

By default following extensions are installed.

* mysqli
* mbstring
* zip
* intl
* mcrypt
* curl
* json
* iconv
* xml
* xmlrpc
* gd

## phpMyAdmin

phpMyAdmin is configured to run on port 8080. Use following default credentials.

url : amazonpublicurl.com/phpmyadmin/  
username: root  
password: ezeelive123
