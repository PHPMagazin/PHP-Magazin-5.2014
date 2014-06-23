<?php
namespace WM2014Bet\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MatchServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $viewHelperManager = $serviceLocator->get('ViewHelperManager');

        $serverUrlHelper = $viewHelperManager->get('ServerUrl');
        $urlHelper = $viewHelperManager->get('Url');

        $restRoute = $serverUrlHelper() . $urlHelper('wm2014-api.rest.matches');

        $service = new MatchService();
        $service->setRestRoute($restRoute);

        return $service;
    }

} 
