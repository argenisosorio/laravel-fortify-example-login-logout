# Laravel 8 Fortify example login and logout

In this example we have a layout from the welcome view, login and logout links,
which make use of the native fortify classes and methods.

## Requirements
```
Laravel Framework 8
```
<b>Note:</b>
<br />
We will use $ to describe the commands that will be used with regular user.

1- Run the following commands in sequence to deploy the project in a development
environment:

$ cp .env.example .env

$ composer install

$ npm install

$ npm run dev

2- Create and configure database in .env.

$ php artisan key:generate

$ php artisan migrate

$ php artisan db:seed

$ php artisan serve

3- Next, you may navigate to you URL http://127.0.0.1:8000/

4- To test the api you must make a post request to /api/register sending name,
email and password in the request and test the api /api/login, make a post
sending email and password in the request.

A user with the credentials has been loaded into the database:

Email: admin@mail.com
Password: 123456 
