<?php
/**
 *
 *
 */

namespace App\Route;

use Javanile\Liberty\Route as LibertyRoute;

class Route extends LibertyRoute
{
    /**
     *
     *
     */
    public function __contruct($app)
    {
        var_dump();



        $app->get('/', function () {
            echo "AA";
        });
    }
}
