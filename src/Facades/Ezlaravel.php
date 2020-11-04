<?php
namespace Javck\Ezlaravel\Facades;

use Illuminate\Support\Facades\Facade;

class Ezlaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ezlaravel';
    }
}
