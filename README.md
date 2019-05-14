# dbperu
Peruvian Database

## Instalation

You can install the package via composer:
```sh
composer require shonen/dbperu
``` 

The DbPeru migrations will create the tables your application:

```sh
php artisan migrate
```

For seeds

```sh
php artisan db:seed --class="Shonen\DbPeru\Database\Seeds\DatabaseSeeder"
```
