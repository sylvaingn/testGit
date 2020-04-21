<?php

$cities =[
    "Tokyo"=> "1 millon",
    "Mexico City"=> "2 millons",
    "New York City"=> "3 millons",
    "Mumbai" => "4 millons",
    "Seoul"=> "5 millons",
    "Shanghai"=> "6 millons"
];

foreach ($cities as $c => $valeur) {
    echo "$c, ";
}


/* ---------- Rajouter une clé ou une valeur dans le tableau --------------

array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

//=> Seulement si Tokyo est un sous tableau
array_push ($cities["Tokyo"], "population", "PIB");

*/



/* ----------- Afficher uniquement les villes sans les valeurs ------------

echo "<ul>" ;
foreach($cities as $c){
echo "<li>$c</li>\n";
}
echo "</ul>" ;
*/


/* -------- Afficher les valeurs du tableau avec foreach -------------

echo "<ul>";

foreach ($cities as $c => $population) {
    echo "<li>"."<strong>"."Pour la ville de : $c"."</strong>", ", la population est de $population."."</li>";
    echo"<br>";
}

echo "</ul>";
*/




var_dump ($cities);


?>

<hr>


<?php

$saisons1 = [
    "été",
    "automne", 
    "printemps", 
    "hiver"
];

var_dump($saisons1);

echo "<hr>";


$aubergines = [
    "quantité" => "12",
    "prix" => "5"
];

echo "<ul>";

foreach ($aubergines as $aub => $caracteristique) {
    echo "<li>"."$aub : "."$caracteristique"."</li>";
}

echo "</ul>";

var_dump($aubergines);

echo "<hr>";

$ete = [
    "aubergines" => [
        "quantité" => 12,
        "prix" => 5
    ],
    "tomates" => [
        "quantité" => 10,
        "prix" => 6
    ]
];

var_dump($ete);

echo "<ul>";

foreach ($ete as $legume => $caracteristiques) {
        echo "<li>"."Pour chaque $legume : "."</li>";
        foreach ($caracteristiques as $caracteristique => $valeur) {
            echo "<ul>"."<li>".$caracteristique." : ".$valeur."</li>"."</ul>";
        }
    }
              
echo "</ul>";

echo "<hr>";


$saisons = [
    "été" => [
        "aubergines" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "tomates" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "automne" => [
        "pommes de terre" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "carottes" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ],
    "hiver" => [
        "avocats" => [
            "quantité" => 12,
            "prix" => 5
        ],
        "pêches" => [
            "quantité" => 10,
            "prix" => 6
        ]
    ]
];

var_dump($saisons);




echo "<ul>";
foreach ($saisons as $saison => $legumes) {
    echo "<li>".$saison." : "."</li>";

        echo "<ul>";
        foreach ($legumes as $legume => $caracteristiques) {
            echo "<li>".$legume." : "."</li>";

            echo "<ul>";
            foreach ($caracteristiques as $caracteristique => $valeur) {
                echo "<li>".$caracteristique." : ".$valeur."</li>";
            }
            echo "</ul>";
        }
        echo "</ul>";
}
echo "</ul>";




echo "<hr>";

// ----------------------------------------------------------- Exercices supplémentaires ---------------------------------------------------------------------------

// Exercice 1 : Soit un tableau $a = array( 0, 1, 2, 3, 4 );, comment afficher la valeur 3 du tableau ?

$a = array( 0, 1, 2, 3, 4 );

var_dump ($a);

echo ($a[3]);

echo "<hr>";

// Exercice 2 : Afficher la valeur 3 du tableau suivant :

$a = [
    "zero"  => 0,
    "un"    => 1,
    "deux"  => 2,
    "trois" => 3,
    "quatre"=> 4,
];

var_dump ($a);

echo ($a["trois"]);

echo "<hr>";

// Exercice 3 : Afficher la valeur 3 du tableau suivant :

$a = [
    [0, 1],
    [2,[3]],
    "zero"  => 0,
    "un"    => 1,
    "deux"  => 2,
    "quatre"=> 4,
];

var_dump ($a);

echo ($a[1][1][0]);

echo "<hr>";

// Exercice 4 : Afficher la valeur 3 du tableau suivant :

$a = [
    "a" => [
        "b" => 0,
        "c" => 1,
    ],
    "d" => [
        "e" =>  2,
        "f" => [
            "g" => 3
        ]
    ]
];

var_dump ($a);

echo ($a["d"]["f"]["g"]);

echo "<hr>";

// Exercice 5 : Terreur ! Un élève a oublié d'indenter son code. Indentez cet array correctement et corrigez l'erreur.
/*
$a = [ "a" => [
    "b" => 0,  "c" => 1,],"d" => [
  2, "f" =>    [
    "g" => 3
  ]];
*/

$a = [ 
    "a" => [
        "b" => 0,  
        "c" => 1
        ],
    "d" => [
        2, 
        "f" => [
            "g" => 3
            ]
        ]
];

var_dump($a);

echo "<hr>";

// Exercice 6 : Trouver la somme de ce tableau de nombres :

$a = [ 0, 1, 2, 3, 4, 5, 6 ];

echo "Le nombre de colonne est de : ".count($a);

$total = ($a[0])+($a[1])+($a[2])+($a[3])+($a[4])+($a[5])+($a[6]);

echo "<br><br>";

echo "La somme est de : ".$total;

echo "<hr>";

/* Exercice 7 : Créez un array $films contenant les données suivantes :
- The Shawshank Redemption
    Année : 1994
    Note : 9.2		
- The Godfather
    Année : 1972
    Note : 9.1		
- The Dark Knight
    Année : 2008
    Note : 9.0		
- The Lord of the Rings: The Return of the King
    Année : 2003
    Note : 8.9
- Pulp Fiction
    Année : 1994
    Note : 8.9
*/

$films = [
    "The Shawshank Redemption" => [
        "Année" => 1994,
        "Note" => 9.2
    ],
    "The Godfather" => [
        "Année" => 1972,
        "Note" => 9.1
    ],
    "The Dark Knight" => [
        "Année" => 2008,
        "Note" => 9.0
    ],
    "The Lord of the Rings: The Return of the King" => [
        "Année" => 2003,
        "Note" => 8.9
    ],
    "Pulp Fiction" => [
        "Année" => 1994,
        "Note" => 8.9
    ]
];

var_dump ($films);

echo "<hr>";

/*Exercice 8a. Créez le tableau suivant :

- The Shawshank Redemption	
- The Godfather
- The Dark Knight
- The Lord of the Rings: The Return of the King
- Pulp Fiction
*/

$films = [
    "The Shawshank Redemption",
    "The Godfather" ,
    "The Dark Knight" ,
    "The Lord of the Rings: The Return of the King",
    "Pulp Fiction" 
];

var_dump ($films);

echo "<hr>";

//Exercice 8b. Affichez tous ses éléments grâce à une boucle foreach($films as $film) { /*...*/ } :

foreach ($films as $film) {
    var_dump($film);
}

echo "<hr>";

/*Exercice 8c. Affichez, toujours grâce à une boucle, plutôt avec à un echo. N'oubliez pas de sauter une ligne entre chaque film !

Exemple :

// Afficher du PHP et du HTML en même temps :

// Solution 1 : concaténation
<body>
    <?php
    echo "<h1>" . $prenom . "</h1>";
    ?>
</body>

// Solution 2 : PHP dans HTML
<body>
    <h1><?php echo $prenom; ?></h1>
</body>
*/

foreach ($films as $film) {
    echo "<h1>".$film."</h1";
    echo "<br>";
}

?>

<br>

<body>
    <h1><?php echo $film; ?></h1>
</body>

<?php

echo "<hr>";

/*Exercice 8d. Affichez ces éléments, toujours grâce à une boucle, plutôt dans une liste <ul> <li>.*/

echo "<br>";

foreach ($films as $film) {
    echo "<li>".$film."</li>";
    echo "<br>";
}

echo "<hr>";

/*Exercice 9a. Soit le tableau suivant :

- The Shawshank Redemption : Frank Darabont
- The Godfather : Francis Ford Coppola
- The Dark Knight : Christopher Nolan
- The Lord of the Rings: The Return of the King : Peter Jackson
- Pulp Fiction : Quentin Tarantino

Créez un tableau de clés => valeurs avec ce tableau, avec le film en clé et le réalisateur en valeur rappel :

$array = [
    "cle" => "valeur",
    "cle2" => "valeur2",
]
*/

$films = [
    "The Shawshank Redemption" => "Frank Darabont",
    "The Godfather" => "Francis Ford Coppola" ,
    "The Dark Knight" => "Christopher Nolan" ,
    "The Lord of the Rings: The Return of the King" => "Peter Jackson",
    "Pulp Fiction" => "Quentin Tarantino"
];

var_dump ($films);

echo "<hr>";

/*Exercice 9b. Reprennez le tableau de l'exercice 9a. Grâce à une boucle dans une boucle, affichez le tableau dans une liste <ul> <li> 
toutes les informations affichées de la façon suivante :

- The Shawshank Redemption : Frank Darabont
- The Godfather : Francis Ford Coppola
- The Dark Knight : Christopher Nolan
- The Lord of the Rings: The Return of the King : Peter Jackson
- Pulp Fiction : Quentin Tarantino
*/

echo "<ul>";

foreach ($films as $film => $realisateur) {
    echo "<li>"."$film : $realisateur"."</li>";
    echo "<br>";
}

echo "</ul>";

echo "<hr>";

/*Exercice 9c. Reprennez le tableau de l'exercice 7. Grâce à une boucle dans une boucle, affichez le tableau dans une liste <ul> <li> 
toutes les informations affichées de la façon suivante :

- The Shawshank Redemption
    Année : 1994
    Note : 9.2		
- The Godfather
    Année : 1972
    Note : 9.1		
- The Dark Knight
    Année : 2008
    Note : 9.0		
- The Lord of the Rings: The Return of the King
    Année : 2003
    Note : 8.9
- Pulp Fiction
    Année : 1994
    Note : 8.9
*/

$films = [
    "The Shawshank Redemption" => [
        "Année" => 1994,
        "Note" => 9.2
    ],
    "The Godfather" => [
        "Année" => 1972,
        "Note" => 9.1
    ],
    "The Dark Knight" => [
        "Année" => 2008,
        "Note" => 9.0
    ],
    "The Lord of the Rings: The Return of the King" => [
        "Année" => 2003,
        "Note" => 8.9
    ],
    "Pulp Fiction" => [
        "Année" => 1994,
        "Note" => 8.9
    ]
];

echo "<ul>";

foreach ($films as $film => $caracteristiques) {
    echo "<li>".$film."</li>";
    foreach ($caracteristiques as $caracteristique => $value) {
        echo "<ul>".$caracteristique." : ".$value."</ul>";
    }
}

echo "</ul>";


?>





<?php

function writeMsg (){
    echo "Hello world !";
}

writeMsg();

?>
