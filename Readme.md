# Package Price for Engin CMS
### Installation manual for developer
* Insert the file `composer.json` next string:
``` JSON
"require": {
        "ourgarage/price": "dev-master"
    },
```
* Add a file `composer.json` next block:
``` JSON
"repositories": [
        {
            "type": "git",
            "url": "git@github.com:ourgarage/price.git"
        }
    ],
```
* Run `php composer.phar update`
* Add in your `config/app.php` file in providers:
``` PHP
Ourgarage\Price\PriceServiceProvider::class,
```
* Run `php artisan vendor:publish --tag=price`
* Run `php artisan migrate`
