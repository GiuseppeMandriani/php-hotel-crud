<?php // Get Data clients

require_once __DIR__ . '/partials/scripts/get_single_room.php';

?>


<!DOCTYPE html>
<html lang="en">

<?php // Include Head

require_once __DIR__ . '/partials/templates/head.php'

?>

<body>
    <main class="container">
    <?php if(!empty($client)){ ?>
    
    <?php } else { ?>
        <h2 class="my-4 text-center">No Client Found</h2>
    <?php } ?>
        <h1 class="my-4">Client <?php echo $client['name'].$client['lastname']; ?></h1>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>LAST NAME</th>
                    <th>DATE OF BIRTH</th>
                    <th>DOCUMENT TYPE</th>
                    <th>DOCUMENT NUMBER</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $room['id']; ?></td>
                    <td><?php echo $room['name']; ?></td>
                    <td><?php echo $room['lastname']; ?></td>
                    <td><?php echo $room['date_of_birth']; ?></td>
                    <td><?php echo $room['document_type']; ?></td>
                    <td><?php echo $room['document_number']; ?></td>
                </tr>

            </tbody>
        
        </table>

        <a class="text-success text-center" href="./index.php">Back to Home</a>

    </main>
    
</body>
</html>