<?php




echo "<hr>";

function randPassword(){

$chars = [0, 1, 2, 3, "a","b","c","z"];
$password = "";

for ($i=0; $i < 10; $i++) { 
    
    $randomIndex = array_rand($chars);
    $char= $chars[$randomIndex];

    $password = $password.$char;
    

}
// Préférence pour "return" pour utiliser une variable dans une fonction
return "$password";


}


echo randPassword();

echo"<hr>";

//------------------------



function addition($nombre1, $nombre2){

    $calcul = $nombre1 + $nombre2;

    return $calcul;

}

echo addition(42, 58);

//------------------------


echo"<hr>";

function moyenne($a, $b){

    $calcul = ($a + $b)/2;

    return $calcul;

}

echo moyenne(42, 58);

//------------------------

echo"<hr>";

function surface($longueur, $largeur){

    $calcul = $longueur*$largeur;

    return $calcul;

}

echo surface(42, 58);
echo"<hr>";

//------------------------

/***
 * Exercice 1 : Créez une fonction "sayHello" qui affiche "Hello world!"
 */

function sayHello() 
{
    return "hello world !";
};

echo sayHello();

echo"<hr>";

/**
 * Exercice 2 : Créez une fonction qui prend en paramètres un nom et un prénom, et affichez les dans
 * la phrase "Bonjour John Doe !"
 */

function helloJohn($prenom, $nom) 
{
    return "Bonjour ".$prenom." ".$nom. " !";
};

echo helloJohn("John", "Doe");
echo"<hr>";

/**
 * Exercice 3 : Créez une fonction qui prend deux nombres en paramètres, et qui retourne la multiplication des deux
 */

function multiplication($a, $b){
    $calcul = $a*$b;
    return $calcul;
}

var_dump(multiplication(2,6));
echo"<hr>";


/**
 * Exercice 4: 
 * En faites une fonction qui prend 2 paramètres :
 * 1. Une phrase
 * 2. Le mot à chercher dans la phrase
 * 
 * et qui remplace le mot cherché dans la phrase par "Jar Jar Binks"
 * 
 * (Par exemple: 
 * - paramètre 1 : la phrase "lorem ipsum dolor sit amet hello world"
 * - paramètre 2 : "hello"
 * 
 * La phrase retournée sera : "lorem ipsum dolor sit amet Jar Jar Binks world"
 */

function jarJarBinks($sentence, $word){
    return (str_replace($word, "Jar Jar Binks", $sentence));
}
$lorem = "lorem ipsum dolor sit amet hello world";

var_dump (jarJarBinks($lorem, "hello"));

echo"<hr>";

//----------  OU  ------------------


function sentence($phrase, $mot){

    str_replace("hello", $mot, $phrase);

    return(str_replace("hello", $mot, $phrase));
}

var_dump(sentence("lorem ipsum dolor sit amet hello world","Jar Jar Binks"));

echo"<hr>";

/**
 * Exercice 5:
 * Faire une fonction qui prend un array simple en paramètres (une liste)
 * 
 * Retourner une string qui contient une liste ul/li avec les éléments de la liste.
 */


$array=[];

function transformArrayEnString($array){
    echo "<ul>";
        for ($i=0; $i < count($array); $i++ ){ 
            $a= $array[$i];
            echo "<li>". $a."</li>" ;
    }  
    echo "/<ul>";
    }

$tableau =['carottes', 'choux', 'patates'];

var_dump(transformArrayEnString($tableau));
echo"<hr>";


/**
 * Exercice 6 :
 * Faire une fonction "drunkenCapitalizer" qui prend une string en paramètres et la retourne
 * avec des lettres minuscules/majuscules aléatoirement. Par exemple :
 * 
 * - paramètre : "hello world"
 * - retourne : "HelLo woRlD"
 * 
 * Étapes de l'algorithme :
 * 1. Trouver comment découper une string lettre par lettre, pour avoir chaque lettre dans un tableau
 * 2. Faire une boucle dans ce tableau de lettres
 * 3. Dans la boucle: trouver comment avoir une valeur aléatoire pour gérer le hasard. En fonction du résultat
 * aléatoire, décider si on met le caractère en majuscule ( strtoupper() ) ou en minuscule ( strtolower() )
 * 
 * Pour gérer le hasard, vous pouvez par exemple générer un nombre aléatoire entre 0 et 10 et dire:
 * - si je tombe sur 0 - 4 : minuscule
 * - si je tombe sur 5 - 9 : majuscule
 * 
 * 4. Dans la  boucle, quand on a changé la lettre, mettre successivement les nouvelles lettres dans un tableau
 * 5. En dehors de la boucle, transformer le tableau en string
 * 6. Retourner la string !
 */


function drunkenCapitalizer($hello){

    $lettres = str_split($hello, 1);


    var_dump($lettres);
    $nouvellesLettres = [];

    foreach ($lettres as $lettre) {
        $i = rand(0,10);

        if ($i<=4) {
            $nouvellesLettres[] = strtoupper($lettre);
            
        } 
        else {
            $nouvellesLettres[] = strtolower($lettre);
            
        }
        
    }
    
    var_dump($nouvellesLettres);

    return implode($nouvellesLettres);

}

var_dump(drunkenCapitalizer("hello world"));


/**
 * Exercice 7 :
 * Comme pour l'exercice 5 qui s'appliquait à une liste, faites une fonction 
 * qui prend un tableau à deux dimensions et en fait une liste ul/li :
 * 
 * Exemple  :
 * 
 * $array = [
 *     'ete'     => [ 'aubergines', 'pêches'],
 *     'automne' => [ 'aubergines', 'pêches'],
 *     'hiver'   => [ 'aubergines', 'pêches'],
 *     'printemps' => [ 'aubergines', 'pêches'],
 * ];
 */

echo"<hr>";

function saisonsLegumes(){

    $array = [
        'ete'     => [ 'aubergines', 'pêches'],
        'automne' => [ 'aubergines', 'pêches'],
        'hiver'   => [ 'aubergines', 'pêches'],
        'printemps' => [ 'aubergines', 'pêches'],
    ];
    
    echo "<ul>";
    
    foreach ($array as $saison => $fruits) {
        
    
        echo "<li>".$saison."</li>";
    
            echo "<ul>";
            foreach ($fruits as $fruit) {
                echo "<li>".$fruit."</li>";
            }
            echo "</ul>";
    
        
    }
    echo "</ul>";

}

echo saisonsLegumes();

echo"<hr>";

/**
 * Exercice 8 : Triangle de Pascal
 * Faites une fonction qui prend en paramètres un nombre "n".
 * La fonction retournera les n premières lignes du triangle de Pascal. C'est un "triangle"
 * de nombres dont les nombres inférieurs sont la somme des deux nombres du dessus :
 * 
 * https://www.w3resource.com/w3r_images/pascal-traingle.png 
 * 
 * Exemple :
 * 
 * Paramètres : n = 6
 * Résultat :
 * 
 * 1
 * 1 1
 * 1 2 1
 * 1 3 3 1
 * 1 4 6 4 1
 * 1 5 10 10 5 1
 * 
 * Les résultats seront présentés sous la forme d'un tableau de tableaux : chaque ligne serait 
 * un sous-tableau du tableau principal */
//accéder ligne précédente;


$n = 10;
$table = [
    0 =>[
        0 => 1
    ] 
    ];

for ( $i = 1; $i <= $n ; $i++ )
	{
		$table[$i][0] = 1;
		for( $j = 1; $j <= $i ; $j++ )
			{
                var_dump($table[$i][$j] = $table[$i-1][$j-1] + $table[$i-1][$j]);
                
                
			}
	}
var_dump($table);


echo"<hr>";







