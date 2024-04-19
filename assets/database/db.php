<?php

// richiamo i file 
require_once __DIR__ . '/../models/Production.php';
require_once __DIR__ . '/../models/Genre.php';
require_once __DIR__ . '/../models/TVserie.php';
require_once __DIR__ . '/../models/Movie.php';


// creo una classe con il nome production
$productions = [];

// creo un oggetto dove gli passo  i valori
$movie_matrix = new Movie("Matrix", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/hammer.jpg", 3000, 120);
// mi setta il tempo
$movie_matrix->setTime();
// mi setta il prezzo
$movie_matrix->setPrice();

// creo un oggetto dove gli passo  i valori
$movie_avatar = new Movie("Avatar", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/hammer.jpg", 3000, 75);
// mi setta il tempo
$movie_avatar->setTime();
// mi setta il prezzo
$movie_avatar->setPrice();

// creo un oggetto dove gli passo  i valori
$movie_bee_movie = new Movie("Bee moovie", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"),  "./assets/img/hammer.jpg", 3000, 135);
// mi setta il tempo
$movie_bee_movie->setTime();
// mi setta il prezzo
$movie_bee_movie->setPrice();

// creo un oggetto dove gli passo  i valori
$movie_il_padrino = new Movie("il padrino", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/hammer.jpg", 3000, 95);
// mi setta il tempo
$movie_il_padrino->setTime();
// mi setta il prezzo
$movie_il_padrino->setPrice();


// creo un oggetto dove gli passo  i valori
$tvserie_bloom = new TVserie("Bloom", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg", 4);
// creo un oggetto dove gli passo  i valori
$tvserie_scarface = new TVserie("Scarface", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg", 4);
// creo un oggetto dove gli passo  i valori
$tvserie_bronk_tale = new TVserie("Bronx tale", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg", 4);
// creo un oggetto dove gli passo  i valori
$tvserie_irishman = new TVserie("Irishman", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg", 4);

// creo un array dove inserisco gli oggetti
$movies = [$movie_matrix, $movie_avatar, $movie_bee_movie, $movie_il_padrino];

// creo un array dove inserisco gli oggetti
$series = [$tvserie_bloom, $tvserie_scarface, $tvserie_irishman, $tvserie_bronk_tale];
// var_dump($movies);

// inserisco le array in productions
$productions = [$movies, $series];


// var_dump($series);

// imposto la pagina che puo leggere solo file json
header('Content-type: application/json');

// trasformo productions in file json
echo json_encode($productions);
// echo json_encode($series);
