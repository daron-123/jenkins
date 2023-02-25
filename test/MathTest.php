<?php

class MathTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd(){
        $this->assertEquals(4,\Ylamalem\Jenkins\Math::add(3,1));
    }

}