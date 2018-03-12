<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use Brain\Monkey;
use Brain\Monkey\Functions;
use PHPUnit\Framework\TestCase;

class MyTestCase extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
        Monkey\setUp();
        require dirname(dirname(__FILE__)) . '/index.php';
    }

    protected function tearDown()
    {
        Monkey\tearDown();
        parent::tearDown();
    }
}
