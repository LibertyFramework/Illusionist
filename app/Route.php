<?php
/**
 *
 *
 */

namespace App\Route;

use Javanile\Illusionist;

class Route
{
    public function __contruct($app)
    {
        $app->get('/', [$this, 'getIndex']);
    }

    private function getIndex()
    {




    }
}
