# Laravel Search
[![Made for Laravel 5](https://img.shields.io/badge/laravel-5.*-red.svg)](http://laravel.com/) 
[![Latest Tag](https://img.shields.io/github/release/ARTWINPRO/laravel-search.svg)](https://github.com/ARTWINPRO/laravel-search/releases)
 
 
## Installation

Require the package in your `composer.json`:

Installation

You can install this package by simply run this composer command:
```consol
composer require artwinpro/laravel-search
```
 
or add this in composer.json
```json
"artwinpro/laravel-search": "dev-master"
```
and run 
```console
composer update
```


## Usage
 
Add in model App\Posts:
```php

use Artwinpro\LaravelSearch\SearchTrait;
 
class Posts extends Model
{
    use SearchTrait;
    
    // Searchable fields.
    public $searchable =  ['name', 'email', 'phone'];
}
 ```

And use:
```php
 $posts = Posts::search()->get(); // Get all users from the database witch search params 
 ```

Request:
```php
 /?name=Admin&email=example@email.com&phone=+37063028205
 ```
