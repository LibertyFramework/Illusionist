<?php
/**
 *
 *
 */

namespace App;

trait Dependencies
{
    public function __contruct($app)
    {
        $container = $app->getContainer();
        $container['logger'] = [$this, 'getLogger'];
        $container['renderer'] = [$this, 'getRenderer'];
    }

    public function getLogger($container) {
        $settings = $container->get('settings')['logger'];
        $logger = new Monolog\Logger($settings['name']);
        $logger->pushProcessor(new Monolog\Processor\UidProcessor());
        $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    }

    public function getRenderer($container)
    {
        $settings = $c->get('settings')['renderer'];

        return new Slim\Views\PhpRenderer($settings['template_path']);
    }
}
