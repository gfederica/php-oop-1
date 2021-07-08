<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
    class Movie {
        // ATTRIBUTI/PROPRIETA'
        public $title;
        public $director;
        public $cast;
        public $genre;
        public $year;
        public $plot;
        public $rating;

        // COSTRUTTORE
        function __construct($title, $genre, $year = "Info non disponibile", $plot = "Trama non disponibile") {
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->plot = $plot;
        }
        // METODI
        public function getRating() {
            if ($this->rating > 14) {
                return $this->rating = "Vietato ai minori di 14 anni";
            } else {
                return $this->rating = "Per tutta la famiglia";
            }
        }
    }

    $matrix = new Movie("Matrix", "Fantascienza", "1999");
    $matrix->director = "Lana Wachowski, Lilly Wachowski";
    $matrix->cast = "Keanu Reeves, Carrie-Anne Moss, Laurence Fishburne ...";
    $matrix->plot = "Esistono due realtà: una è l'esistenza che conduciamo ogni giorno, l'altra è nascosta. Neo vuole scoprire la verità su Matrix, mondo virtuale elaborato al computer creato per tenere sotto controllo le persone. Morpheus potrebbe aiutarlo.";
    $matrix->rating = 16;



    $mrNobody = new Movie("Mr.Nobody", "Fantascienza");
    $mrNobody->director = "Jaco Van Dormael";
    $mrNobody->cast = "Jared Leto ...";
    $mrNobody->plot ="Un bambino è al binario di una stazione ed il treno sta per partire. Deve decidere se salire con la madre o restare con il proprio padre. Una moltitudine di vite possibili scaturiscono da questa scelta. Tutte le esistenze meritano di essere vissute.";
    $mrNobody->rating = 10;

