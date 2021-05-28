<?php 

/**
* GET DATA FROM OSPITI
*/


// import DB

require_once __DIR__ . '/database.php';

// Ottenere informazioni delle stanze 

// Costruisco la query
$sql = "SELECT * FROM `ospiti`";

// Run the query
$result = $conn->query($sql);

// Check in base ai dati ottenuti

if($result && $result->num_rows > 0){       // Verifico le righe ottenute
        
    $clients =[];

    while($row = $result-> fetch_assoc()){      
        // var_dump($row);

        $clients[] = $row;

    }

     var_dump($clients);

    // Check funzionamento Query
} else if ($result){
    echo '<h2>Element Not Found</h2>';
} else{
    echo '<h2>Query Error</h2>';

}

// Chiusura Connessione DATABASE

$conn->close();

?>