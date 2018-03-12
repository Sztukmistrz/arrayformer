<?php

namespace Sztukmistrz\Arrayformer\Tests;

use Sztukmistrz\Arrayformer\Facades\Arrayformer;
use Sztukmistrz\Arrayformer\ServiceProvider;
use Orchestra\Testbench\TestCase;

class ArrayformerTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'arrayformer' => Arrayformer::class,
        ];
    }

    public function testExample()
    {
        assertEquals(1, 1);
    }
}
