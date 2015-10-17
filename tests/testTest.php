<?php

require(__DIR__ . '/../Foo.php');

class testTest extends PHPUnit_Framework_TestCase
{
    private $object;

    protected function setUp() {
        $this->object = new Foo();
    }

    public function testGetBarSuccess() {
        $this->assertEquals($this->object->getBar(), "bar");
    }
}
