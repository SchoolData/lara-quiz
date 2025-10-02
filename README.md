# LaraQuiz (Fork for SchoolData)

Laravel package to create forms: surveys, exams, etc.

## System requirements

* PHP >= 8.1
* Laravel 8.0+

## Installation

Require this package with composer. Laravel 8+ uses Package Auto-Discovery, so doesn't require you to manually add the 
ServiceProvider.

## Usage

Package contains database migrations and models that are perfectly suited to create any form you want. Feel free to use
built-in routes and controllers or extend them. Blade views for administration panel are also included, use they as an
example to create your own views.

## Important

For Laravel 9 or higher please update the structure of the migrations 

```php 

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Code 
};
```
