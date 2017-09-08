<?php
/**
 * Class MainPrivateApplication
 */

namespace App;

use Slim\App as SlimApp;
use Javanile\Yaml\Yaml;

class Illusionist extends SlimApp
{
    /**
     * @param $args
     *
     */
    public function __contruct()
    {
        parent::__contruct();
    }

    /**
     *
     */
    public function eat($filename)
    {
        $apps = Yaml::resolve($filename);

        $routes['home'] = [];

        foreach ($apps as $app => $settings) {
            $home = isset($settings['home']) ? $settings['home'] : '/';

            if (!isset($routes['home'][$home])) {
                $routes['home'][$home] = $app;
            } else {
                throw new Exception("Duplicate home.");
            }
        }

        foreach ($routes['home'] as $pattern => $app) {
            $this->get($pattern, '\\App\\PrivateApplication');
        }
    }
}
