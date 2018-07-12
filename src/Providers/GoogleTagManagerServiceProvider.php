<?php

namespace GoogleTagManager\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class GoogleTagManagerServiceProvider
 * @package GoogleTagManager\Providers
 */
class GoogleTagManagerServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(GoogleTagManagerRouteServiceProvider::class);
    }
}