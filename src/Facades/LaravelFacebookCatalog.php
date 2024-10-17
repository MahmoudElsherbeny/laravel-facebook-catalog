<?php

namespace MahmoudElsherbeny\LaravelFacebookCatalog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MahmoudElsherbeny\LaravelFacebookCatalog\LaravelFacebookCatalog
 */
class LaravelFacebookCatalog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MahmoudElsherbeny\LaravelFacebookCatalog\LaravelFacebookCatalog::class;
    }
}
