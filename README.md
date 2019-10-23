# Simple CRUD Laravel

simple CRUD on laravel with validation.

## Requirement
- php >= 7.2.0
- composer 1.9.0
- laravel => 5.8


### Installing
-open your command prompt or terminal

-clone repo

```
git clone https://github.com/he3x/project1.git
```

-move to project directory

```
cd /project1
```

-install or update composer

```
composer install
```
or

```
composer update
```

-then copy file .env.example and rename to .env

-go to folder database and create new file with name database.sqlite

-open file .env change DB_CONECTION to sqlite and DB_DATABASE with your path database.sqlite, delete DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD or just comment them.

```
DB_CONNECTION=sqlite
DB_DATABASE=D:\project1\database\database.sqlite
```

-after that migrate migrate database

```
php artisan migrate
```

-run artisan serve

```
php artisan serve
```

then open the url you got, example http://127.0.0.1:8000
