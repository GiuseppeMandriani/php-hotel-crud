<?php // Get Data rooms

require_once __DIR__ . '/partials/scripts/get_rooms.php';

?>


<!DOCTYPE html>
<html lang="en">

<?php // Include Head

require_once __DIR__ . '/partials/templates/head.php'

?>

<body>
    <main class="container">
        <h1 class="my-4 text-center">Rooms</h1>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Number</th>
                    <th>Room Details</th>
                </tr>
                
            </thead>
            <tbody>
                <?php // Loop sui data provenienti dal DB

                if(!empty($rooms)){   // Controllo se i dati del DB sono vuoti 
                    foreach($rooms as $room){ ?>
                    <tr>
                        <td><?php echo $room['id']; ?></td>
                        <td><?php echo $room['room_number']; ?></td>
                        <td>
                            <a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">View Details</a>
                        </td>
                    </tr>

                    <?php } 
                }

                ?>
            </tbody>
  
        </table>
    </main>
    
</body>
</html>