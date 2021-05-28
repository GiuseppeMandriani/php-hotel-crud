<?php 

/**
* GET DATA FROM STANZE
*/


// import DB

require_once __DIR__ . '/database.php';

// Ottenere informazioni delle stanze 

// Costruisco la query
$sql = "SELECT `stanze`.`id`, `stanze`.`room_number` FROM `stanze`";


?>