<?php


/*$movies = [
    1 => [
        'title' => "Harry Potter",
        'director' => "Machin",
        'category' => "Fantastique"
    ],
    2 =>[
        'title' => "Harry Potter 2",
        'director' => "Bidule",
        'category' => "Fantas"
    ],
    3 =>[
        'title' => "Harry Potter 3",
        'director' => "Bidule",
        'category' => "Fantas"
    ],
    4 =>[
        'title' => "Harry Potter 4",
        'director' => "Bidule",
        'category' => "Fantas"
    ],
    5 =>[
        'title' => "Harry Potter 5",
        'director' => "Bidule",
        'category' => "Fantas"
    ],
];
*/

include("accueil.php");

?>






<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <!-- Faire l'exercice ici ! -->
                <?php foreach ($movies as $movie => $caracteristiques) : ?>
                        Film #<?=$movie?> : <a href="film.php?id=<?=$movie ?>"><?=$caracteristiques["title"]  ?></a>
                        <h1><?=$caracteristiques["title"]  ?></h1>
                        <h2><?=$caracteristiques["director"]  ?></h2>
                        <small><?=$caracteristiques["category"]  ?></small>
                        <br>
                        <br>
                        <br>
                    
                <?php endforeach; ?>
                <!--/ Faire l'exercice ici ! -->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>












