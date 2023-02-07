<?php

require('tree.php');

class Poirier extends Arbre
{
    public int $maxFruit = 20;
    public int $minFruit = 0;

    public int $recolteFruit;

    public function __construct($numero, $espece, $recolteFruit)
    {
        parent::__construct($numero, $espece, $recolteFruit);
    }

}

$monPoirier = new Poirier('A2', 'Poirier', 15);
echo $monPoirier->getEspece() .  "\n";
echo $monPoirier->getMaxFruit() .  "\n";
echo $monPoirier->getMinFruit().  "\n";
echo $monPoirier->getRecolteFruit().  "\n";
echo $monPoirier->getNumero().  "\n";