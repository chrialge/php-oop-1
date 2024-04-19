<?php


require_once __DIR__ . '/../models/Production.php';
require_once __DIR__ . '/../models/Genre.php';
require_once __DIR__ . '/../models/TVserie.php';
require_once __DIR__ . '/../models/Movie.php';


// creo una classe con il nome production
$productions = [];

// inserisco il contenuto dell'istanza all'$productions




// dumbo il contenuto dell'$productions
// echo json_encode($productions);





$movie_matrix = new Movie("Matrix", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/hammer.jpg", 3000, 120);
$movie_matrix->setTime();
$movie_matrix->setPrice();

$movie_avatar = new Movie("Avatar", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/hammer.jpg", 3000, 75);
$movie_avatar->setTime();
$movie_avatar->setPrice();


$movie_bee_movie = new Movie("Bee moovie", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"),  "./assets/img/hammer.jpg", 3000, 135);
$movie_bee_movie->setTime();
$movie_bee_movie->setPrice();


$movie_il_padrino = new Movie("il padrino", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/hammer.jpg", 3000, 95);
$movie_il_padrino->setTime();
$movie_il_padrino->setPrice();



$tvserie_bloom = new TVserie("Bloom", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg", 4);
$tvserie_scarface = new TVserie("Scarface", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg", 4);
$tvserie_bronk_tale = new TVserie("Bronx tale", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg", 4);
$tvserie_irishman = new TVserie("Irishman", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg", 4);


$movies = [$movie_matrix, $movie_avatar, $movie_bee_movie, $movie_il_padrino];


$series = [$tvserie_bloom, $tvserie_scarface, $tvserie_irishman, $tvserie_bronk_tale];
// var_dump($movies);

$productions = [$movies, $series];


// var_dump($series);


header('Content-type: application/json');
echo json_encode($productions);
// echo json_encode($series);
