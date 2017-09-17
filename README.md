# Laravel AdminLTE
Laravel 5.4 with AdminLTE template and Laravel Mix friendly.

# Installation
```bash
composer require atnic/laravel-admin-lte
```
Add this line on ```config/app.php```, on  ```providers```
```php
'providers' => [
  ...
  Atnic\AdminLTE\Providers\AppServiceProvider::class,
  ...
]
```
And then run,
```bash
php artisan make:admin-lte
```
Let's see what we've install. First, make sure that you already ran ```php artisan migrate``` command, then do
```bash
php artisan serve
```
Viola! You've running a Laravel site using AdminLTE.

For more information on command
```bash
php artisan make:admin-lte --help
```

# Usage
This package provides view for auth and app. Take a look at ```resources/views/layouts/app.blade.php```.

In this file you can extends global section like user name, avatar, breadcrumbs, and menu.

To extends menu add this in ```app.blade.php```
```blade
@section('sidebar-menu')
<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATOR</li>
  <li class="active">
    <a href="{{ route('home') }}">
      <i class="fa fa-home"></i>
      <span>Home</span>
    </a>
  </li>
</ul>
@endsection
```

To extends breadcrumbs add this
```blade
@section('breadcrumbs')
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Title</li>
</ol>
@endsection
```

This package give you free of choice to use any Laravel Package for Menu and Breadcrumb. We recommend [spatie/laravel-menu](https://github.com/spatie/laravel-menu) or [lavary/laravel-menu](https://github.com/lavary/laravel-menu), and [davejamesmiller/laravel-breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs).

Any new created page should extends this view.
```blade
@extends('layouts.app')

// Your blade here
```

# Configuration and Views Customization
## Config
To publish this package config to your app config run
```bash
php artisan vendor:publish --provider="Atnic\AdminLTE\Providers\AppServiceProvider" --tag="config"
```
## Views
To publish this package views so you can customize on your own run
```bash
php artisan vendor:publish --provider="Atnic\AdminLTE\Providers\AppServiceProvider" --tag="views"
```

# Next Step
First of all, you should understand how to use [Laravel Mix](https://laravel.com/docs/5.4/mix).

AdminLTE need some package on npm. First you need to run
```bash
npm install
```

Install AdminLTE needed package from npm
```bash
npm install --save-dev admin-lte fastclick font-awesome icheck slim-scroll
```

Run Laravel Mix command
```bash
npm run development
```
or use ```production``` minimize output
```bash
npm run production
```

Then have a good look on these files
- ```webpack.mix.js```
- ```resources/assets/js/admin-lte.js```
- ```resources/assets/js/auth.js```
- ```resources/assets/sass/admin-lte.scss```
- ```resources/assets/sass/auth.scss```

Happy experimenting!
