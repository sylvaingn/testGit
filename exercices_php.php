<?php

$year = [
    "janvier",
    "fevrier",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "decembre"
];

var_dump ($year[2]);

echo"<hr>";


array_splice($year,7,null,"AOÛT");
unset($year[8]);

var_dump ($year);

echo"<hr>";

$year[9]=strtoupper($year[9]);

var_dump($year);


echo"<hr>";

$global = [

    "France" => [
        "capitale" => "Paris",
        "population" => 3000000
    ],
    "Italie" => [
        "capitale" => "Rome",
        "population" => 2000000
    ],
    "Grèce" => [
        "capitale" => "Athenes",
        "population" => 1000000
    ]

];

var_dump($global["France"]["population"]);

echo "La france a pour capitale".$global["France"]["capitale"]." et possède une population de".$global["France"]["population"];


echo"<hr>";
$year = [
    "janvier",
    "fevrier",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "decembre"
];

foreach ($year as $month) {
    var_dump($month);
}
echo"<hr>";
echo"<hr>";
echo"<hr>";

//--------------------------------------------------------
echo"<strong>"."--------------------EXERCICE PARIS------------------------"."</strong>";


$global = [

    "France" => [
        "capitale" => "Paris",
        "population" => 7000000
    ],
    "Roumanie" => [
        "capitale" => "Bucarest",
        "population" => 7000000
    ],
    "Grece" => [
        "capitale" => "Athene",
        "population" => 7000000
    ]
    

];

var_dump($global["France"]["population"]);

echo"<hr>";

$keys = array_keys($global);
echo $keys[0];


echo"<hr>";

$newKey = array_keys($global["France"]);

echo $newKey[0];

echo"<hr>";

foreach ($global as $country => $caracteristiques) {
    foreach ($caracteristiques as $caracteristique => $value) {
        
        echo "La ".$country." a pour capitale ".$caracteristique." et possède une population de ".$value;
        echo "<br>";
    }
}

echo"<hr>";
echo"<hr>";
echo"<hr>";




//--------------------------------------------------------


;
function exercice($array){

    echo "<ul>";
    foreach ($array as $key => $value) {

        if (is_array($value)) {
            echo "<li>".$key."</li>";
            exercice($value);
        } else {
            echo "<li>".$value."</li>";
        }
        
        

        
    }
    echo "</ul>";

    return $array;

}

$array = [
    "aubergines" => [
        "quantité" => [6, 10],
        "prix" => 2
    ],
    "tomates" => [
        "quantité" => 6,
        "prix" => 2
    ],
    "pomme de terre" => [
        "quantité" => 6,
        "prix" => 2
    ],
];

var_dump(exercice($array));



echo"<hr>";
echo"<hr>";
echo"<hr>";
echo"<hr>";
echo"<hr>";
echo"<hr>";
//----------------------------------------------------------------

for ($i=0; $i <=10 ; $i++) { 
    echo $i;
    echo"<br>";
}


echo"<hr>";

for ($i=0; $i <=10 ; $i++) { 
    if ($i%2===0) {
        echo $i;
        echo"<br>";

    }
}

echo"<hr>";

for ($i=100; $i > 1;){ 
        echo $i;
        $i= $i/2;
        echo "<br>";
        
        

    
}
echo"<hr>";
echo"<hr>";


echo"<table border='1'>";
    
        echo "<tr>";
        for ($i=1; $i <=10 ; $i++) { 
        echo "<td>".$i."</td>";

    
        for ($k=2; $k <=10 ; $k++) { 
            
            echo "<td>".$i*$k."<td>";
            
        }

        echo "</tr>";
    }

    
    
echo"</table>";



echo"<hr>";
echo"<hr>";
echo"<hr>";



function hamming($first, $second){

if (array_keys($first)!= array_keys($second)) {
    throw new Exception("Message d'erreur");
}



var_dump(array_keys($first));

$total = 0;

for ($i=0; $i <=16 ; $i++) { 
    if ($first[$i] === $second[$i]) {
        echo $first[$i]."/".$second[$i];
        $total=$total+1;
        echo "<br>";
    }
}


return $total;



}
$first = ["G","A","G","C","C","G","G","G","A","T","T","A","C","T","A","A","C"];
$second = ["G","A","G","C","C","G","G","T","A","C","T","A","A","C","G","A","T"];

echo "Distance de Hamming : ".hamming($first,$second);


echo"<hr>";
echo"<hr>";
echo"<hr>";




function hamming2($longueur, $paires){




/*
    if ($first[$i] === $first[$i+1]) {
        echo $first[$i]."/".$second[$i+1];
        //La paire !!
        echo "<br>";
    }
*/    


}


