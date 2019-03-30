<?php

namespace Tests;

use StaticFactory;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class StaticFactoryTest
 * @package Tests
 */
class StaticFactoryTest
{
    /**
     * Test Static factory
     */
    public function test()
    {
        var_dump(StaticFactory::factory('number'),StaticFactory::factory('string'));
    }
}

// Run test.
(new StaticFactoryTest())->test();