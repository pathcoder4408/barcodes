<?php

namespace Pathcoder4408\Barcoder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pathcoder4408\Barcoder\Barcoder
 */
class Barcoder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'barcoder';
    }
}
