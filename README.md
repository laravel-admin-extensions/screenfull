# screenfull.js for Laravel-admin

This is an extension to integrates screenfull.js into laravel-admin.

## Screenshot

<img alt="screenfull" src="https://user-images.githubusercontent.com/2421068/51837126-68d0c380-233d-11e9-9a53-2247e2f80acc.png">


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

