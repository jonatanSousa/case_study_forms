
https://www.cloudsigma.com/deploying-laravel-nginx-and-mysql-with-docker-compose/

## Requirements
- PHP 8.0.x
- MYSQL

## Basic Installation & Setup

```bash
git clone https://github.com/jonatanSousa/case_study_forms.git study_forms
cd study_forms
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
npm install && npm run dev
php artisan storage:link
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

If all goes well your new shiny website should be serving at ``http://localhost:800``, enjoy and happy coding 🎉 !


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
