<?php // Get Data rooms

require_once __DIR__ . '/partials/scripts/get_rooms.php';
require_once __DIR__ . '/partials/scripts/get_clients.php';

?>


<!DOCTYPE html>
<html lang="en">

<?php // Include Head

require_once __DIR__ . '/partials/templates/head.php'

?>

<body>
    <main class="container">
        <h2 class="my-4 text-center">Rooms</h2>

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

        <h2 class="my-4 text-center">Clients</h2>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>LAST NAME</th>
                    <th>CLIENTS INFO</th>
                </tr>
                
            </thead>
            <tbody>
                <?php // Loop sui data provenienti dal DB

                if(!empty($clients)){   // Controllo se i dati del DB sono vuoti 
                    foreach($clients as $client){ ?>
                    <tr>
                        <td><?php echo $client['id']; ?></td>
                        <td><?php echo $client['name']; ?></td>
                        <td><?php echo $client['lastname']; ?></td>
                        <td>
                            <a class="text-success" href="./showclient.php?id=<?php echo $client['id']; ?>">View Details</a>
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