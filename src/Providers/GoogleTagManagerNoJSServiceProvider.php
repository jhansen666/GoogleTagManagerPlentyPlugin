<?php

namespace GoogleTagManager\Providers;

use Plenty\Plugin\Templates\Twig;

class GoogleTagManagerNoJSServiceProvider
{
    public function call ( Twig $twig )
    {
        return $twig->render('GoogleTagManager::GoogleTagManagerCodeNoJS');
    }
}