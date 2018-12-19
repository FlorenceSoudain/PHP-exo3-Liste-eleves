<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 19/12/2018
 * Time: 14:14
 */

// fonction pour déterminer si un nombre est pair ou impair
function pair ($num){
    if($num % 2 === 0) {
        return "Pair";
    }
    else {
        return "Impair";
    }
}

echo pair(99); //changer le chiffre par celui que l'on veut déterminer