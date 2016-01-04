<?php

namespace Softpampa\Poly1305Laravel;

use Illuminate\Support\Facades\Facade;

/**
 * Poly1305 Facade
 */
class Poly1305 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Poly1305';
    }
}
