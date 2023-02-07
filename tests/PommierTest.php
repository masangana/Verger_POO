<?php

require('class/Pommier.php');
use PHPUnit\Framework\TestCase;

class PommierTest extends TestCase {
    
    public function testConstructor(){
        $monPommier = new Pommier('A25','Pommier', 45);
        $this->assertEquals('A25', $monPommier->getNumero());
        $this->assertEquals('Pommier', $monPommier->getEspece());
        $this->assertEquals(45, $monPommier->getRecolteFruit());
        $this->assertEquals(50, $monPommier->getMaxFruit());
        $this->assertEquals(40, $monPommier->getMinFruit());
    }

    public function testSetEspece(){
        $monPommier = new Pommier('A35','Pommier', 45);
        $monPommier->setEspece('Pommier2');
        $this->assertEquals('Pommier2', $monPommier->getEspece());
    }

    public function testSetRecolteFruit(){
        $monPommier = new Pommier('P24','Pommier', 45);
        $monPommier->setRecolteFruit(45, 50, 40);
        $this->assertEquals(45, $monPommier->getRecolteFruit());
    }

    public function testSetRecolteFruitException(){
        $this->expectException(Exception::class);
        $monPommier = new Pommier('P57','Pommier', 45);
        $monPommier->setRecolteFruit(55, 50, 40);
    }

    public function testGetEspece(){
        $monPommier = new Pommier('P55','Pommier', 45);
        $this->assertEquals('Pommier', $monPommier->getEspece());
    }

    /*
    * @Add Muliple item
    */
    public function testMultipleFruits(){
        $monPommier = new Pommier('P89','Pommier', 45);
        $monPommier2 = new Pommier('P99','Pommier2', 45);
        $this->assertEquals(50, $monPommier->getMaxFruit());
        $this->assertEquals(40, $monPommier2->getMinFruit());
    }

    /*
    * @expectedException Exception
    * @expectedExceptionCode 101
    */
    public function testMultipleFruitsUniqueNumero(){
        $monPommier = new Pommier('P9','Pommier', 45);
        try {
            $monPommier2 = new Pommier('P9','Pommier2', 45);
        } catch (Exception $e) {
            $this->assertEquals(101, $e->getCode());
        }
    }
}