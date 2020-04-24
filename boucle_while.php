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

echo "Exercice chevaux !!!!!!";
echo"<br>";

$horses = [2, 5, 8, 9, 13, 14, 18];
$ecarts=[];


for ($i = 0; $i < count($horses)-1; $i++)  {
    echo $horses[$i];

    $ecartAvecLeSuivant = abs($horses[$i]-$horses[$i+1]);
    $ecart[] = $ecartAvecLeSuivant;
}

var_dump($ecart);

var_dump(min($ecart));











echo"<hr>";


/**
 * Additionner les nombres de 1 à 50 (1+2+3+4...+49+50)
 */


for ($i=1; $i <=50 ; $i++) { 
    echo $i.", ";
    
}


$addition = 0;

for ($i=1; $i <=50 ; $i++) { 
    $addition = $addition + $i;
}
echo $addition;






echo"<hr>";



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


for ($j=1; $j <= 5; $j++) { 
    echo str_repeat("* ",$j);
    echo"<br>";
}

for ($j=5; $j >=1; $j--) { 
    echo str_repeat($k,$j);
    echo"<br>";
}


echo"<hr>";


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
        $t=$i*$k;
        echo $i."*".$k."= ".$t;
        echo"<br>";
    }
}

echo"<hr>";


echo"<table border='1'>";
    for ($i=1; $i <=9 ; $i++) { 
        echo "<tr>";
        echo "<td>".$i."</td>";

    
        for ($k=1; $k <=9 ; $k++) { 
            
            echo "<td>".$i*$k."<td>";
            
        }

        echo "</tr>";
    }

    
    
echo"</table>";

echo"<hr>";
/**
 * À partir du code suivant, créer un échiquier (un tableau qui alterne des cases noire/blanches sur les lignes et les colonnes)
*/
echo"<hr>";

echo "<table border='1'>";
    for ($i=1; $i <=8 ; $i++) { 
        echo"<tr>";
            
            for ($j=1; $j <=8 ; $j++) { 
                $total = $i + $j;
                if ($total%2===0) {
                    echo "<td height=30px width=30px style='background-color: black; color:white;'>$total</td>";
                    
                }
                else {
                    echo "<td height=30px width=30px style='background-color: white;'>$total</td>";
                
                }

            }

        echo"</tr>";
    }
echo "</table>";

echo"<hr>";



/*
 * Écrire une boucle qui affiche des nombres de 1 à 100.
 * - Si un nombre est divisible par 3, afficher "Fizz" à la place
 * - Si un nombre est divisible par 5, afficher "Buzz" à la place
 * - Si un nombre est divisible par 3 et par 5, afficher "FizzBuzz" à la place
*/



for ($i=1; $i <=100 ; $i++) { 
    if ($i%3===0 and $i%5===0) {
        echo $i." : "."FizzBuzz";
        echo "<br>";
    }
    elseif ($i%3===0) {
        echo $i." : "."Fizz";
        echo "<br>";
        

    }
    elseif ($i%5===0) {
        echo $i." : "."Buzz";
        echo "<br>";

    }
    else {
        

    }
}















