<?php


include __DIR__ . './assets/models/Production.php';
// creo una classe con il nome production
/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$hammer = new Production("Hammer", "eng", rand(1, 10));

// richiamo il valore title nell'istanza hammer
// dumbo per vedere cosa ce dentro all'istanza di hammer
var_dump($hammer);
// inserisco il contenuto dell'istanza ad un array

$array[] = $hammer;
/**
 * creo una variabile che crea un istanza con il nome della varibile e gli passa tre valori che verrano poi assegnati all' istanza
 */
$sword = new Production("sword", "it", rand(1, 10));

// dumbo per vedere cosa che dentro l'istanza di sword
var_dump($sword);
// inserisco il contenuto dell'istanza all array
$array[] = $sword;



// dumbo il contenuto dell'array
echo $array;
