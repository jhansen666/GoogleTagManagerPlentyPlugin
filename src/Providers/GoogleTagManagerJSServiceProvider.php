<?php

namespace GoogleTagManager\Providers;

use Plenty\Plugin\Templates\Twig;

class GoogleTagManagerJSServiceProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('GoogleTagManager::GoogleTagManagerCode');
    }
}