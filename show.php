<?php // Get Data rooms

require_once __DIR__ . '/partials/scripts/get_single_room.php';

?>


<!DOCTYPE html>
<html lang="en">

<?php // Include Head

require_once __DIR__ . '/partials/templates/head.php'

?>

<body>
    <main class="container">
    <?php if(!empty($room)){ ?>
    
    <?php } else { ?>
        <h2 class="my-4 text-center">No Room Found</h2>
    <?php } ?>
        <h1 class="my-4">Rooms Number <?php echo $room['room_number'] ?></h1>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room Number</th>
                    <th>Floor</th>
                    <th>Beds</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $room['id'] ?></td>
                    <td><?php echo $room['room_number'] ?></td>
                    <td><?php echo $room['floor'] ?></td>
                    <td><?php echo $room['beds'] ?></td>
                </tr>

            </tbody>
        
        </table>

        <a class="text-success text-center" href="./index.php">Back to Home</a>

    </main>
    
</body>
</html>