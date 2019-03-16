<?php

namespace StaticFactory\Tests;

use StaticFactory\StaticFactory;

require __DIR__ . "/../Formatter.php";
foreach (glob("*.php") as $filename) {
    if (file_exists($file = __DIR__ . '/../' . $filename)) {
        require_once $file;
    }
}

class StaticFactoryTest
{
    public function test()
    {
        var_dump(StaticFactory::factory('number'),StaticFactory::factory('string'));
    }
}

(new StaticFactoryTest())->test();