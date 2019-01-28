# screenfull.js for Laravel-admin

## Screenshot

## Installation

```bash
composer require jxlwqq/screenfull
php artisan vendor:publish --tag=laravel-admin-screenfull
```

## Configurations

Add `extensions` option in your `config/admin.php` configuration file:

```php
'extensions' => [
    'screenfull' => [
        // If the value is set to false, this extension will be disabled
        'enable' => true
    ]
]
```


## More resources

[Awesome Laravel-admin](https://github.com/jxlwqq/awesome-laravel-admin)

## License

Licensed under [The MIT License (MIT)](LICENSE).

