<?php

namespace Respins\BasicSpins\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Respins\BasicSpins\BasicSpins
 */
class BasicSpins extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'basic-spins';
    }
}
