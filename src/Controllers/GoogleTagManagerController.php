<?php

namespace GoogleTagManager\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class GoogleTagManagerController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getGoogleTagManager(Twig $twig):string
    {
        return $twig->render('GoogleTagManager::Index');
    }
}