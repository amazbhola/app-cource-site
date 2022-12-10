<?php

namespace Amaz\LaravelSlugGenarator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Amaz\LaravelSlugGenarator\UniqueSlug
 */
class UniqueSlug extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     *
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-slug-generator';
    }
}
