<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */

    public function testSayHelloArgument($arg, $expected)
    {
        $this->assertEquals($expected, sayHelloArgument($arg));
    }
    public function DataProvider()
    {
        return [
            ['Den', "Hello Den"],
            [11, "Hello 11"],
            [true, "Hello 1"],
            ];
    }
}
