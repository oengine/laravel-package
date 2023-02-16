<?php

namespace OEngine\LaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * 
 * @method static mixed addListener(string|array $hook, mixed $callback,int  $priority)
 * @method static \OEngine\LaravelPackage\Hook\FilterHook removeListener(string  $hook)
 * @method static array getListeners()
 * @method static mixed fire(string  $action,array  $args)
 *
 * @see \OEngine\LaravelPackage\Filter
 */
class Filter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \OEngine\LaravelPackage\Hook\FilterHook::class;
    }
}
