<?php
/**
 *
 *
 */

namespace App\Route;

use Javanile\Illusionist\Route as LibertyRoute;

class Route extends LibertyRoute
{
    public function __contruct($app)
    {
        $app->get('/', [$this, 'getIndex']);
    }

    private function getIndex()
    {




    }
}
