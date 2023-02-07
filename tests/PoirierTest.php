<?php

require('class/Poirier.php');

use PHPUnit\Framework\TestCase;

class PoirierTest extends TestCase {

    public function testConstructor(){
        $monPoirier = new Poirier('S4', 'Poirier', 15);
        $this->assertEquals('S4', $monPoirier->getNumero());
        $this->assertEquals('Poirier', $monPoirier->getEspece());
        $this->assertEquals(15, $monPoirier->getRecolteFruit());
        $this->assertEquals(20, $monPoirier->getMaxFruit());
        $this->assertEquals(0, $monPoirier->getMinFruit());
    }

    public function testSetEspece(){
        $monPoirier = new Poirier('S6', 'Poirier', 15);
        $monPoirier->setEspece('Poirier2');
        $this->assertEquals('Poirier2', $monPoirier->getEspece());
    }

    public function testSetRecolteFruit(){
        $monPoirier = new Poirier('S8', 'Poirier', 15);
        $monPoirier->setRecolteFruit(15, 20, 0);
        $this->assertEquals(15, $monPoirier->getRecolteFruit());
    }

    public function testSetRecolteFruitException(){
        $this->expectException(Exception::class);
        $monPoirier = new Poirier('S10', 'Poirier', 15);
        $monPoirier->setRecolteFruit(25, 20, 0);
    }

    public function testGetEspece(){
        $monPoirier = new Poirier('S12', 'Poirier', 15);
        $this->assertEquals('Poirier', $monPoirier->getEspece());
    }

    /*
    * @Add Muliple item
    */
    public function testMultipleFruits(){
        $monPoirier = new Poirier('S14', 'Poirier', 15);
        $monPoirier2 = new Poirier('S16', 'Poirier2', 15);
        $this->assertEquals(20, $monPoirier->getMaxFruit());
        $this->assertEquals(0, $monPoirier2->getMinFruit());
    }
}