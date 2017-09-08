<?php
/**
 *
 *
 */

namespace App\Route;

use Javanile\Illusionist;

class Routes
{
    public function register($app)
    {
        $app->get('/', [$this, 'getIndex']);
    }

    private function getIndex()
    {




    }
}
