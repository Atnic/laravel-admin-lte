# Laravel AdminLTE

[![Latest Stable Version](https://poser.pugx.org/atnic/laravel-admin-lte/v/stable)](https://packagist.org/packages/atnic/laravel-admin-lte)
[![Total Downloads](https://poser.pugx.org/atnic/laravel-admin-lte/downloads)](https://packagist.org/packages/atnic/laravel-admin-lte)
[![Latest Unstable Version](https://poser.pugx.org/atnic/laravel-admin-lte/v/unstable)](https://packagist.org/packages/atnic/laravel-admin-lte)
[![License](https://poser.pugx.org/atnic/laravel-admin-lte/license)](https://packagist.org/packages/atnic/laravel-admin-lte)
[![Monthly Downloads](https://poser.pugx.org/atnic/laravel-admin-lte/d/monthly)](https://packagist.org/packages/atnic/laravel-admin-lte)
[![Daily Downloads](https://poser.pugx.org/atnic/laravel-admin-lte/d/daily)](https://packagist.org/packages/atnic/laravel-admin-lte)

Laravel AdminLTE adalah package Laravel yang terintegrasi dengan template dashboard [AdminLTE](https://adminlte.io/) dan package ini adalah Laravel Mix friendly. Saat ini, package ini dapat diintegrasikan dengan mudah pada instalasi baru.

# Instalasi
```bash
composer require atnic/laravel-admin-lte
```
Jika anda menggunakan Laravel versi 5.5 ke atas, anda dapat melewati tahapan ini. Namun jika tidak, ketik baris berikut pada ```config/app.php```, on  ```providers```

```php
'providers' => [
  ...
  Atnic\AdminLTE\Providers\AppServiceProvider::class,
  ...
]
```
Kemudian jalankan perintah

```bash
php artisan make:admin-lte
```
Perhatikan akan yang telah kita install. Pertama pastikan anda telah menjalankan perintah ```php artisan migrate```, kemudian ketik
```bash
php artisan serve
```
Selamat! Kamu telah dapat menjalankan situs Laravel menggunakan AdminLTE.

Untuk informasi lain, anda dapat melihatnya melalui perintah

```bash
php artisan make:admin-lte --help
```

# Penggunaan
Package ini menyediakan tampilan untuk auth dan aplikasi. Lihatlah ```resources/views/layouts/app.blade.php```.

Pada berkas ini anda dapat menambahkan komponen global seperti nama pengguna, avatar, breadcrumbs, dan menu.

Untuk menambahkan menu, tambahkan hal ini di ```app.blade.php```
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
Untuk menambahkan breadcrumbs, tambahkan 

```blade
@section('breadcrumbs')
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Title</li>
</ol>
@endsection
```
Package ini memberikan anda kebebasan untuk menggunakan package Laravel apapun untuk komponen Menu dan Breadcrumb. Kami menyarankan anda menggunakan package berikut [spatie/laravel-menu](https://github.com/spatie/laravel-menu) or [lavary/laravel-menu](https://github.com/lavary/laravel-menu), and [davejamesmiller/laravel-breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs).

Setiap halaman baru harus menambahkan view berikut.

```blade
@extends('layouts.app')

// Blade anda di sini
```

# Kostumisasi Pengaturan dan Tampilan
## Pengaturan/Config
Untuk menerbitkan package config ke config aplikasi anda, jalankan

```bash
php artisan vendor:publish --provider="Atnic\AdminLTE\Providers\AppServiceProvider" --tag="config"
```
## Tampilan/Views
Untuk menerbitkan package views sehingga anda dapat melakukan kostumisasi, jalankan

```bash
php artisan vendor:publish --provider="Atnic\AdminLTE\Providers\AppServiceProvider" --tag="views"
```

# Langkah Selanjutnya
Pertama, anda perlu memahami bagaimana cara untuk menggunakan [Laravel Mix](https://laravel.com/docs/5.4/mix).

Pastikan pada `package.json` terdapat `"laravel-mix": "^2.0"`.

AdminLTE membutuhkan beberapa package dari npm. Jika komputer anda belum terpasang npm, jalankan perintah berikut

```bash
npm install
```

Instal package yang dibutuhkan oleh AdminLTE melalui npm
```bash
npm install --save-dev admin-lte@^2.4 bootstrap-sass fastclick font-awesome icheck ionicons jquery jquery-slimscroll
```
Jalankan perintah Laravel Mix

```bash
npm run development
```
atau gunakan ```production``` untuk mengurangi output

```bash
npm run production
```

Kemudian coba lihat isi dari berkas berkas berikut

- ```webpack.mix.js```
- ```resources/assets/js/admin-lte.js```
- ```resources/assets/js/auth.js```
- ```resources/assets/sass/admin-lte.scss```
- ```resources/assets/sass/auth.scss```

Selamat berkarya! 💪🏼💪🏼
