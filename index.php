<?php

require_once('class/Pommier.php');
require_once('class/Poirier.php');

echo "===========================================================\n";
echo "      --------Welcome to Frute system------                \n";
echo "===========================================================\n";

echo "Options : \n";
echo "1. Add a Pommier \n";
echo "2. Add a Poirier \n";
echo "3. list \n";

//$myfile = fopen("pommes.txt", "r");
//$myfile2 = fopen("poires.txt", "r");

$pommierList = [];
$poirierList = [];

while (true) {
    
    $line = readline("Choose an option : ");
    if ($line == "exit") {
        file_put_contents("pommes.txt", print_r($pommierList, true));
        //file_put_contents("poires.txt", print_r($poirierList, true));
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