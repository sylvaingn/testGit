<?php

var_dump($_GET);
include("accueil.php");

var_dump($movies[$_GET["id"]])
?>



Vous avez demandé le numéro <?= $_GET["id"] ?>

<br>
<br>
<br>
<br>


Le film que vous avez choisi est : <?= $movies[$_GET["id"]]["title"] ?>, 
produit par <?= $movies[$_GET["id"]]["director"] ?>, 
dans la catégorie <?= $movies[$_GET["id"]]["category"] ?>

