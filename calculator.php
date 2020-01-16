<?php

    $calculate = readline("Welke operatie wil je uitvoeren? (+, -)");
    $getal1 = readline("Eerste getal?");
    $getal2 = readline("Tweede getal?");

    if($calculate == "+") {
           $output =$getal1+$getal2;
            
    }
     if($calculate == "-") {
        $output =$getal1-$getal2;


     } 

        echo("Uw resultaat is:".$output);



?>