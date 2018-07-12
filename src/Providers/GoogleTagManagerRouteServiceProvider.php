<?php

namespace GoogleTagManager\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class GoogleTagManagerRouteServiceProvider
 * @package GoogleTagManager\Providers
 */
class GoogleTagManagerRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','GoogleTagManager\Controllers\GoogleTagManagerController@getHelloWorldPage');
    }
}