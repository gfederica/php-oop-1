<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <?php
        include __DIR__ . "/classes/Movies.php";
    ?>
    <main class="container">
            <div class="movie">
                <h2><?= $matrix->title; ?></h2>
                <ul style="list-style-type: none">
                    <li>Regia: <?= $matrix->director; ?></li>
                    <li>Attori: <?= $matrix->cast; ?></li>
                    <li>Genere: <?= $matrix->genre; ?></li>
                    <li>Anno: <?= $matrix->year; ?></li>
                </ul>
                <p style="width: 50%"><?= $matrix->plot; ?></p>
                <small>Rating: <?= $matrix->getRating(); ?></small>
            </div>

            <hr>

            <div class="movie">
                <h2><?= $mrNobody->title; ?></h2>
                <ul style="list-style-type: none">
                    <li>Regia: <?= $mrNobody->director; ?></li>
                    <li>Attori: <?= $mrNobody->cast; ?></li>
                    <li>Genere: <?= $mrNobody->genre; ?></li>
                    <li>Anno: <?= $mrNobody->year; ?></li>
                </ul>
                <p style="width: 50%"><?= $mrNobody->plot; ?></p>
                <small>Rating: <?= $mrNobody->getRating(); ?></small>
            </div>
        </main>
    
</body>
</html>