<?php 
namespace Javck\Easyweb2\Facades;

use Illuminate\Support\Facades\Facade;

class Easyweb2 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'easyweb2';
    }
}