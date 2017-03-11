<?php
/**
 * Class MainPrivateApplication
 */

namespace App;

use Slim\App as SlimApp;

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
    public function parse($filename)
    {
        var_dump($filename);


    }
}
