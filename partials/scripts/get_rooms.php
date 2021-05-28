<?php 

/**
* GET DATA FROM STANZE
*/


// import DB

require_once __DIR__ . '/database.php';

// Ottenere informazioni delle stanze 

// Costruisco la query
$sql = "SELECT `stanze`.`id`, `stanze`.`room_number` FROM `stanze`";

// Run the query
$result = $conn->query($sql);

// Check in base ai dati ottenuti

if($result && $result->num_rows > 0){       // Verifico le righe ottenute
        
    $rooms =[];

    while($row = $result-> fetch_assoc()){      
        // var_dump($row);

        $rooms[] = $row;

    }

    var_dump($rooms);

    // Check funzionamento Query
} else if ($result){
    echo '<h2>Element Not Found</h2>';
} else{
    echo '<h2>Query Error</h2>';

}

// Chiusura Connessione DATABASE

$conn->close();




?>