<?php

require_once('class/Pommier.php');
require_once('class/Poirier.php');

for ($i=1; $i <11 ; $i++) { 
    
    $monPommier = new Pommier('P'.$i,'Pommier', 45);
    $monPoirier = new Poirier('A'.$i,'Poirier', 15);
    echo $monPommier->getNumero()." ".$monPommier->getEspece() ." ". $monPommier->getRecolteFruit().  "\n";
    echo $monPoirier->getNumero()." ".$monPoirier->getEspece() ." ". $monPoirier->getRecolteFruit().  "\n";
}

echo "===========================================================\n";
echo "      --------Welcome to Frute system------                \n";
echo "===========================================================\n";

echo "Options : \n";
echo "1. Add a Pommier \n";
echo "2. Add a Poirier \n";
echo "3. list \n";

$pommierList = [];
$poirierList = [];

while (true) {
    
    $line = readline("Choose an option : ");
    if ($line == "exit") {
        break;
    }elseif( $line == '1'){
        echo "Add a Pommier  \n";
        $code = readline("Choose a number : ");
        $espece = "Pommier";
        $fruit = readline("Choose a fruit : ");
        $monPommier = new Pommier($code,$espece, $fruit);
        array_push($pommierList, $monPommier);

    }elseif($line == '2'){
        echo "Add Poirier  \n";
        $code = readline("Choose a number : ");
        $espece = "Poirier";
        $fruit = readline("Choose a fruit : ");
        $monPoirier = new Poirier($code,$espece, $fruit);
        array_push($poirierList, $monPoirier);

    }else{
        echo "List  \n";
        $totalPomme = 0;
        $totalPoire = 0;
        if (empty($pommierList)) {
            echo "No Pommier \n";
        }else{
            foreach ($pommierList as $pommier) {
                echo $pommier->getNumero()." ".$pommier->getEspece() ." ". $pommier->getRecolteFruit().  "\n";
                $totalPomme += $pommier->getRecolteFruit();
            }
        }
        echo "Total Pomme : ".$totalPomme."\n";
        echo "\n";
        foreach ($poirierList as $poirier) {
            echo $poirier->getNumero()." ".$poirier->getEspece() ." ". $poirier->getRecolteFruit().  "\n";
            $totalPoire += $poirier->getRecolteFruit();
        }
        echo "Total Poire : ".$totalPoire."\n";
        echo "\n";
    }
}