<?php
/**
 * Class MainPrivateApplication
 */

namespace App;

class PrivateApplication
{
    /**
     * @param $args
     *
     */
    public function __contruct()
    {
        echo "ASD";
    }

    public function __invoke()
    {
        echo "ggg";
    }
}