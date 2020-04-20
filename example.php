<?php 
$age = 16;

if ( $age >= 18 )
{
    echo "Vous êtes majeur";
}

else 
{
    echo "Vous êtes mineur";
}
?>

<hr>

<?php
$isEasy = true;

if ($isEasy = true) {
    echo "C'est facile !";
}

else {
    echo "C'est difficile !";
}
?>
<hr>

<?php
$age = 70;
$gender = "femme";

if ($age >= 18 and $gender === "homme") {

    echo "Vous êtes un homme et vous êtes majeur";
}

elseif ($age<18 and $gender === "homme") {
    echo "Vous êtes un homme et vous êtes mineur";
}

elseif ($age >= 18 and $gender === "femme"){
    echo "Vous êtes une femme et vous êtes majeure";
}

else {
    echo "Vous êtes une femme et vous êtes mineure";
}
?>

<hr>

<?php
$magnitude = 7;

switch ($magnitude) {
case 1:
    echo "Micro-séisme impossible à ressentir.";
    break;
case 2:
    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
break;
case 3:
    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
break;
case 4:
    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
break;
case 5:
    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
break;
case 6:
    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
break;
case 7:
    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
break;
case 8:
    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
break;
case 9:
    echo "Séisme capable de tout détruire sur une très vaste zone.";
break;
default:
    echo "Pas de résultat";
    break;
}

?>

<hr>

<?php
$type ='fv';

if ($type==='fire') 
{
    echo "Vous avez choisi Salamèche.";
}
else
{
    echo "Vous avez choisi Bulbizarre ou Carapuce !";
}

?>
<hr>

<?php

$userIsConnected = true; 
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <a class="navbar-brand" href="#">WF3 PHP !</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>

            <!-- Si l'utilisateur est connecté, afficher : -->
            <span class="text-white">
                <?php
                if ($userIsConnected === true) {
                    echo "Vous êtes connecté.";
                }
                else {
                    echo "Vous n'êtes pas connecté.  ";
                }
                ?>
                
            </span>

            <!-- Si l'utilisateur n'est pas connecté, afficher : -->
            <a href="#" class="text-white">
                <?php
                if ($userIsConnected === true) {
                    echo "";
                }
                else {
                    echo "Cliquez ici pour vous connecter";
                }
                ?>

            </a>
        </div>
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>


<hr>

<!-- Exerice Mario -->

<?php
$time = 200;
$coin = 10;
$gain;

if ($time< 120) {
    $gain=200;
    if ($coin<=10) {
        $gain=$gain+$coin;
    }
    elseif ($coin>10 and $coin<=20) {
        $gain=$gain+$coin*1.5;
    }
    else {
        $gain=$gain+$coin*2;
    }
}
elseif ($time>= 120 and $time<180) {
    $gain=100;
    if ($coin<=10) {
        $gain=$gain+$coin;
    }
    elseif ($coin>10 and $coin<=20) {
        $gain=$gain+$coin*1.5;
    }
    else {
        $gain=$gain+$coin*2;
    }    
}
else {
    $gain=50;
    if ($coin<=10) {
        $gain=$gain+$coin;
    }
    elseif ($coin>10 and $coin<=20) {
        $gain=$gain+$coin*1.5;
    }
    else {
        $gain=$gain+$coin*2;
    }
}

echo "Résultat : ".$gain." points";

?>

<hr>

<?php

$panier= 101;
echo ($panier === 0) ? 'Panier vide' : (( $panier>100) ? 'Commande dépassée' : 'Commande en cours');

?>


<hr>

<?php

$maths = 7;
$anglais = 12;
$histoire = 9;
$moyenne = round((($maths+$anglais+$histoire)/3),2);

if ($moyenne >=10 && $moyenne <15) {
    if ($maths<6 or $anglais<6 or $histoire <6) {
        echo "Eliminatoire";
    }
    else {
        echo "Mention assez bien. "."Moyenne : ".$moyenne;
    }
}
else if ($moyenne >=15 && $moyenne <18) {
    if ($maths<6 or $anglais<6 or $histoire <6) {
        echo "Eliminatoire";
    }
    else {
        echo "Mention bien. "."Moyenne : ".$moyenne;
    }
    
}
else if ($moyenne >=15 && $moyenne <=20) {
    if ($maths<6 or $anglais<6 or $histoire <6) {
        echo "Eliminatoire";
    }
    else {
        echo "Mention très bien. "."Moyenne : ".$moyenne;
    }
    
}
else {
    echo "Aucune mention. "."Moyenne : ".$moyenne;
}

?>

<hr>

<?php

$result = 1/2;

$array = [
    "a",
    true,
    42,
    $result,
    [
        "été",
        "printemps",
        "automne",
        "hiver",
    ]
];

var_dump ($array);

var_dump($array[4]);

echo $array [4] [3];

//echo $array[2]; //Afficher valeur dans le tableau

echo "<hr>";

$user = [
    "firstname" => "john",
    "lastname" => "doe",
    "age" => "54",
    "job" => "developpeur"
];

var_dump($user);

echo $user ["job"];


echo "<hr>";


$users = [
    "user01"=>[
        "firstname" => "john",
        "lastname" => "doe",
        "age" => "54",
        "job" => "developpeur"
    ],
    "user02" =>[
        "firstname" => "hermionne",
        "lastname" => "granger",
        "age" => "20",
        "job" => "magicienne"
    ]
    ];


var_dump($users);

echo $users ["user02"]["job"];

echo "<hr>";

$array = [
    "tomates",
    "navets",
    "carottes",
    "oignons"
];

echo "Exercice 3.b";
var_dump($array[2]);

echo"<hr>";

$produits = [
    "tomates" =>[
        "prix"=> 1
    ],
    "navets" =>[
        "prix" => 2
    ],
    "carottes" =>[
        "prix" => 4
    ],
    "oignons" =>[
        "prix" => 0.99
    ]
];
echo "Exercice 4.b";
var_dump($produits["carottes"]["prix"]);


echo "<hr>";

$saison = [
    "printemps" => [
        "légumes" => [
            "tomates"=>[
                "quantité",
                "prix"
            ],
            "oignons"=> [
                "quantité",
                "prix"
            ],
        ]
    ],
    "été" => [
        "légumes" => [
            "tomates"=>[
                "quantité" => 200,
                "prix" => 10,
                "prix total"
                
            ],
            "oignons"=> [
                "quantité",
                "prix"
            ],
        ]
    ],
    "automne" => [
        "légumes" => [
            "tomates"=>[
                "quantité",
                "prix"
            ],
            "oignons"=> [
                "quantité",
                "prix"
            ],
        ]
    ],
    "hiver" => [
        "légumes" => [
            "tomates"=>[
                "quantité",
                "prix"
            ],
            "oignons"=> [
                "quantité",
                "prix"
            ],
        ]
    ]
];


//$prix_total = ($saison["été"]["légumes"]["tomates"]["prix"])*($saison["été"]["légumes"]["tomates"]["quantité"]);
$saison ["été"]["légumes"]["tomates"]["prix total"] = ($saison ["été"]["légumes"]["tomates"]["quantité"]) * ($saison ["été"]["légumes"]["tomates"]["prix"]); 
echo "Exercice 5.b";
var_dump($saison ["été"]["légumes"]["tomates"]["prix total"]);
//echo $prix_total;

















echo "<hr>";

$saison2 = [
    "été",
    "automne",
    "hiver"
];

$saison2 ["printemps"] = [];
$saison2 ["printemps"] ["patate"] = [];
$saison2 ["printemps"]["patate"]["quantité"] = [];
$saison2 ["printemps"]["patate"]["prix"] = [];

var_dump($saison2);

?>

<hr>


<?php

$user = [
    "firstname" => "john",
    "lastname"  => "doe",
    "age"       => "54",
    "job"       => "developpeur"
];

echo "<hr>";

echo "<ul>";
foreach($user as $carac => $valeur) {
    echo "<li><strong>" . $carac . "</strong> : " . $valeur . "</li>";
}
echo "</ul>";

?>

<hr>

<?php
$saison1 = [
    "été" => [
        6,
        
    ], 
    "automne" => 6, 
    "printemps" => 7, 
    "hiver" => 8
];

echo "<hr>";

echo "<ul>";

foreach ($saison1 as $saison => $numero) {
    echo "<li>".$saison.$numero."</li>";
    
}

echo "</ul>";

echo "test git";

echo "deuxieme test";