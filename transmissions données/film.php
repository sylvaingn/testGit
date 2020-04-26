<?php

var_dump($_GET);

include("tableaux_données.php");

$colonne = array_column($movies, "id");
$search = array_search($_GET["id"], $colonne);
$nom = $movies[$search];

var_dump($nom);

?>

Le film <?=$nom["title"]?> (id :<?=$nom["id"]?>, catégorie : <?=$nom["category"]?>), a été produit par <?=$nom["director"]?>.