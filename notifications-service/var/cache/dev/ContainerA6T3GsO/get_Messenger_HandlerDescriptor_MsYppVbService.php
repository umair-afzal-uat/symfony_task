<?php

namespace ContainerA6T3GsO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_MsYppVbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.msYppVb' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'MessageHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MessageHandler'.\DIRECTORY_SEPARATOR.'UserCreatedMessageHandler.php';

        return $container->privates['.messenger.handler_descriptor.msYppVb'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\MessageHandler\UserCreatedMessageHandler(($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService'))), []);
    }
}
