<?php

namespace Svallamsetti\CollectionGen;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Svallamsetti\CollectionGen\Skeleton\SkeletonClass
 */
class CollectionGenFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'collectiongen';
    }
}
