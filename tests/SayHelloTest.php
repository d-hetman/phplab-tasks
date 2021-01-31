<?php

use PHPUnit\Framework\TestCase;

class SayHelloTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.constants.predefined.php
     */
    public function testSayHello()
    {
        // The current line number of the file.
        $this->assertEquals('Hello', sayHello());
    }
}
