<?php

namespace Skfz\Quran\Facades;

use Illuminate\Support\Facades\Facade;

class Reader extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'reader';
    }
}
