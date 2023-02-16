<?php

namespace OEngine\LaravelPackage;

use Illuminate\Support\Facades\Facade;

/**
 * 
 * @method static mixed addListener(string|array $hook, mixed $callback,int  $priority)
 * @method static \OEngine\LaravelPackage\Hook\ActionHook removeListener(string  $hook)
 * @method static array getListeners()
 * @method static mixed fire(string  $action,array  $args)
 *
 * @see \OEngine\LaravelPackage\Action
 */
class Action extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \OEngine\LaravelPackage\Hook\ActionHook::class;
    }
}
