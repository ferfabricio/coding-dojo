<?php

require(__DIR__ . '/../Numeros.php');

class numerosTest extends PHPUnit_Framework_TestCase
{
    private $object;

    protected function setUp() {
        $this->object = new Numeros();
    }


    public function testDivisivel()
    {
        $this->assertTrue($this->object->divisivel(5));
        $this->assertTrue($this->object->divisivel(3));
        $this->assertTrue($this->object->divisivel(0));
    }
    public function testNaoDivisivel()
    {
        $this->assertFalse($this->object->divisivel(1));
    }

    public function testeString(){
        $this->assertFalse($this->object->divisivel("3"));
    }

    public function testDivisivelPorAmbos()
    {
        $this->assertTrue($this->object->divisivel(15));
    }

    public function testDivisiveisIntervalo()
    {
        $this->assertEquals($this->object->getDivisiveis(10), [3, 5, 6, 9]);
    }

    public function testDivisiveisIntervaloVazio(){
        $this->assertEquals($this->object->getDivisiveis(2), []);
    }

    public function testDivisiveisIntervaloString(){
        $this->assertEquals($this->object->getDivisiveis("2"), []);
    }

    public function testNumeroNegativo(){
        $this->assertEquals($this->object->getDivisiveis(-10), []);
    }

    public function testSomaIntervaloValidoDez(){
            $this->assertEquals($this->object->somaValoresIntervalo(10), 23);
    }

    public function testSomaIntervaloVazio(){
            $this->assertEquals($this->object->somaValoresIntervalo(2), 0);
    }

    public function testSomaIntervaloValidoCem(){
            $this->assertEquals($this->object->somaValoresIntervalo(100), 2318);
    }

    public function testSomaIntervaloValidoMil(){
            $this->assertEquals($this->object->somaValoresIntervalo(1000), 233168);
    }
}
