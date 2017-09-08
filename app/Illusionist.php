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
        $code = Yaml::resolve($filename);

        echo '<pre>';
        var_dump($code);
        echo '</pre>';

        foreach ($code as $app => $settings) {
            $home = isset($settings['home']) ? '/'.trim($settings['home'],'/') : '/';

            if (!isset($this->routes[$home])) {
                $this->routes[$home] = $app;
                $this->get($home, [$this, 'getHome']);
            } else {
                throw new Exception("Duplicate routes: {$home}");
            }
        }
    }

    public function getHome()
    {
        echo '<h1>Home</h1>';
    }
}
