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

$k="* ";

for ($j=1; $j <= 5; $j++) { 
    echo str_repeat($k,$j);
    echo"<br>";
}









