<?php


require_once __DIR__ . '/../models/Production.php';
require_once __DIR__ . '/../models/Genre.php';
require_once __DIR__ . '/../models/TVserie.php';
require_once __DIR__ . '/../models/Movie.php';


// creo una classe con il nome production
$productions = [
    $matrix = new Production("Matrix", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/hammer.jpg"),
    $avatar = new Production("Avatar", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/sword.jpg"),
    $bee_movie = new Production("Bee moovie", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/shield.avif"),
    $il_padrino = new Production("il padrino", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/armor.jpg"),
    $irishman = new Production("Irishman", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/spear.jpg"),
    $bronx_tale = new Production("Bronx tale", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/katana.jpg"),
    $scarface = new Production("Scarface", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/rifle.jpg"),
    $bloom = new Production("Bloom", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg"),
];


// inserisco il contenuto dell'istanza all'$productions


// header('Content-type: application/json');

// dumbo il contenuto dell'$productions
// echo json_encode($productions);





$movie = new Movie("Matrix", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/hammer.jpg", 3000, 95);
$movie->setTime();
$movie->setPrice();
var_dump($movie);

$tvserie = new TVserie("Bloom", "eng", rand(1, 10), new Genre('action', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg", 4);
var_dump($tvserie);
