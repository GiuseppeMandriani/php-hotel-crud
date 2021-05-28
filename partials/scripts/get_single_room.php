<?php 

/**
* Get Details Single Room
*/  

require_once __DIR__ . '/database.php';

// Get Room id

$id = empty($_GET['id']) ? false : $_GET['id'];

// Chiamata al DB solo se pieno

if($id){
    // $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = '$id'");     
    $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");
    $stmt->bind_param('s', $id);

    // Esecuzione
    $stmt->execute();

    //Per leggere risultato
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0){
        $room = $result->fetch_assoc();             // Quando il record sarà solo 1 o 0

        // var_dump($room);
    }
}


// Close CONNECTION

$conn->close();



?>