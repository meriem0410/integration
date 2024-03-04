<?php

namespace ContainerUMtxBqg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProgControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProgController' shared autowired service.
     *
     * @return \App\Controller\ProgController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProgController.php';

        $container->services['App\\Controller\\ProgController'] = $instance = new \App\Controller\ProgController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\ProgController', $container));

        return $instance;
    }
}
