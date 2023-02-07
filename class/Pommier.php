<?php

require_once('Tree.php');

class Pommier extends Arbre
{
    public int $maxFruit = 50;
    public int $minFruit = 40;

    public int $recolteFruit;

    public function __construct($numero, $espece, $recolteFruit)
    {
        parent::__construct($numero, $espece, $recolteFruit);
    }

}
/*
$monPommier = new Pommier('A18','Pommier', 45);
$monPommier2 = new Pommier('A28','Pommier2', 45);
echo $monPommier->getEspece() .  "\n";
echo $monPommier->getMaxFruit() .  "\n";
echo $monPommier->getMinFruit().  "\n";
echo $monPommier->getRecolteFruit().  "\n";
echo $monPommier->getNumero().  "\n";*/