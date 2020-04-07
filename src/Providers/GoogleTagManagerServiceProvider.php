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
        /** @var ConsentRepositoryContract $consentRepository */
        $consentRepository = pluginApp(ConsentRepositoryContract::class);
        $consentRepository->registerConsent(
            'tagManager',
            'GoogleTagManager::GoogleTagManager.consentLabel',
            [
                'description' => 'GoogleTagManager::GoogleTagManager.consentDescription',
                'provider' => 'GoogleTagManager::GoogleTagManager.consentProvider',
                'lifespan' => 'GoogleTagManager::GoogleTagManager.consentLifespan',
                'policyUrl' => 'GoogleTagManager::GoogleTagManager.consentPolicyUrl',
                'group' => 'tracking',
                'necessary' => false,
                'isOptOut' => true,
                'cookieNames' => ['_ga', '_gid', '_gat']
            ]
        );
    }
    
}