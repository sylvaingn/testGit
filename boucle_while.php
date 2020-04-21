<?php

$i = 0;

while($i < 10) {
    var_dump($i);    // La boucle commence à 0;
    $i++;
}

echo"<hr>";

$j = 0;

while($j < 10) {
    $j++;           // La boucle commence à 1;
    var_dump($j);
    
}

echo"<hr>";

$k = 0;
while ($k < 11) {
    
    if ($k%2 === 0) {
        var_dump($k);   //Avoir uniquement les chiffres paires
    }
    $k ++;
}

echo"<hr>";

for ($i=0; $i < 10 ; $i++) { 
    var_dump($i);
}

echo"<hr>";

for ($i=0; $i < 10 ; $i += 2) { 
    var_dump($i);       //Avoir uniquement les chiffres paires avec for
}

echo"<hr>";

//------------------------------------------------------------------------------------------------
/*Exercice : faire une boucle (for ou while) qui affiche
*  
* *  
* * *  
* * * *  
* * * * *

*/
$k="* ";

for ($j=1; $j <= 5; $j++) { 
    echo str_repeat($k,$j);
    echo"<br>";
}

/**
 * Afficher chaque données du tableau suivant avec une boucle For
 */
$array = [2, 5, 8, 9, 13, 14, 18];


    for ($i = 0; $i < count($array); $i++)  {
        echo $array[$i] ."<br />";
    }

echo"<hr>";


/**
 * Additionner les nombres de 1 à 50 (1+2+3+4...+49+50)
 */





/**
 *
 * Afficher le schéma suivant (étoiles de 1 à 5 puis de 5 à 1)
 * 
 * * 
 * * * 
 * * * * 
 * * * * * 
 * * * * * 
 * * * * 
 * * * 
 * * 
 * 
 */ 

$k="* ";

for ($j=1; $j <= 5; $j++) { 
    echo str_repeat($k,$j);
    echo"<br>";
}

for ($j=5; $j >=1; $j--) { 
    echo str_repeat($k,$j);
    echo"<br>";
}





/**
 * Boucle dans une boucle:
 * 
 * Afficher grâce à deux boucles imbriquées la liste des tables de multiplication :
 * 
 * 1*1
 * 1*2
 * 1*3
 * ...
 * 1*9
 * 2*1
 * 2*2
 * ...
 * 2*9
 * ...
 * 9*1
 * 9*2
 * ...
 * 9*9
 */

for ($i=1; $i <=9 ; $i++) { 
    for ($k=1; $k <=9 ; $k++) { 
        echo $i."*".$k;
        echo"<br>";
    }
}














