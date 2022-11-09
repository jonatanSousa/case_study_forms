
https://www.cloudsigma.com/deploying-laravel-nginx-and-mysql-with-docker-compose/

## Requirements
- PHP 8.0.x
- MYSQL 5.7.x

This project  uses composer as dependency manager in the root directory install it,
following the instructions on https://getcomposer.org/doc/00-intro.md

After downloading composer execute this command:
```
composer install
```

## Basic Installation & Setup

```bash
git clone https://github.com/jonatanSousa/case_study_forms.git study_forms
cd study_forms
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan:serve
```

## Using Docker

It's also possible to use 🐳 Docker to setup & install the project please kindly follow the instructions:
At this point we assume you have docker & running on your machine

```bash
git clone https://github.com/jonatanSousa/case_study_forms.git study_forms
cd study_forms
cp .env.example .env
docker-compose build
docker-compose up -d
docker-compose exec app php artisan migrate
```

To then execute command please kindly use :
```
docker-compose exec app bash
```

If all goes well your new shiny website should be serving at ``http://localhost/forms``, like the image bellow, enjoy 🎉 !

![Screenshot from 2022-11-09 17-15-10](https://user-images.githubusercontent.com/35583616/200897112-c1030650-87f7-46e3-978c-5988dd61f39d.png)

## Database stucture 

![Screenshot from 2022-11-09 17-14-34](https://user-images.githubusercontent.com/35583616/200897138-f85db7ed-5761-4d5f-93fc-fc14f00a2765.png)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


