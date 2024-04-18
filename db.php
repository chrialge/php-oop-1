<?php


require_once __DIR__ . './assets/models/Production.php';
require_once __DIR__ . './assets/models/genre_production.php';

// creo una classe con il nome production
/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$hammer = new Production("Hammer", "eng", rand(1, 10), new genre('hammer', "lorem ipsun doroe co son tu"), "./assets/img/hammer.jpg");
$array[] = $hammer;
/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$sword = new Production("sword", "it", rand(1, 10), new genre('sword', "lorem ipsun doroe co son tu"), "./assets/img/sword.jpg");
$array[] = $sword;

/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$shield = new Production("shield", "fr", rand(1, 10), new genre('shield', "lorem ipsun doroe co son tu"), "./assets/img/shield.avif");
$array[] = $shield;
/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$armor = new Production("armor", "br", rand(1, 10), new genre('armor', "lorem ipsun doroe co son tu"), "./assets/img/armor.jpg");
$array[] = $armor;
/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$spear = new Production("spear", "gr", rand(1, 10), new genre('spear', "lorem ipsun doroe co son tu"), "./assets/img/spear.jpg");
$array[] = $spear;
/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$katana = new Production("katana", "jb", rand(1, 10), new genre('katana', "lorem ipsun doroe co son tu"), "./assets/img/katana.jpg");
$array[] = $katana;
/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$rifle = new Production("rifle", "eng", rand(1, 10), new genre('rifle', "lorem ipsun doroe co son tu"), "./assets/img/rifle.jpg");
$array[] = $rifle;
/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$gun = new Production("gun", "urs", rand(1, 10), new genre('gun', "lorem ipsun doroe co son tu"), "./assets/img/gun.jpg");
$array[] = $gun;
// inserisco il contenuto dell'istanza all array

header('Content-type: application/json');

// dumbo il contenuto dell'array
echo json_encode($array);
