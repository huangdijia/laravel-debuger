<?php

namespace Huangdijia\Debuger\Facades;

use Huangdijia\Debuger\Debuger as Accessor;
use Illuminate\Support\Facades\Facade;

class Debuger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Accessor::class;
    }
}
