<?php
namespace App\Facades;

use Illumnate\Support\Facades\Facade;

class Search extends Facade{
  protected static function getfacadeAccessor() {
    return 'serch';
}