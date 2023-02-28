<?php

namespace Pathcoder4408\Barcodes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pathcoder4408\Barcodes\Barcodes
 */
class Barcodes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'barcodes';
    }
}
