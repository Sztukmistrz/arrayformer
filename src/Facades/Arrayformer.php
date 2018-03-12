<?php

namespace Sztukmistrz\Arrayformer\Facades;

use Illuminate\Support\Facades\Facade;

class Arrayformer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'arrayformer';
    }
}
