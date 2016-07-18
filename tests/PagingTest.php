<?php

use Silex\Application;

class PagingTest extends PHPUnit_Framework_TestCase
{
    private function init()
    {
        $app = new Application();
        $app['debug'] = true;

        return $app;
    }

    public function testPaging()
    {
    }
}
