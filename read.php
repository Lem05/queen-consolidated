<?php

include "database.php";

$queryAccounts = "SELECT * FROM contact";
$sqlAccounts = mysqli_query($connection, $queryAccounts);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- fontawesome -->
        <link rel="stylesheet" href="css/all.min.css">

        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- cursor -->
        <link rel="stylesheet" href="css/cursor.css">

        <!-- animated-headline -->
        <link rel="stylesheet" href="css/animated.headline.css">

        <!-- lightbox -->
        <link rel="stylesheet" type="text/css" href="css/simple-lightbox.min.css">

        <!-- slick-slider -->
        <link rel="stylesheet" type="text/css" href="css/slick.css">
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css">

        <!-- custom css -->
        <link rel="stylesheet" href="css/style.css">

        <!-- responsive css -->
        <link rel="stylesheet" href="css/media.css">
</head>
<body>
            <table class="table bg-dark text-white p-2 mb-2 col-12"><br><br>
                <h2>Client List</h2><br>
                <a href="index.html" class="btn btn-primary fs-3 mb-4 ml-3">Home</a>
            <thead>
                <tr class="text-danger text-center">
                <th scope="col">Client ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Message</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>
                <?php while($results = mysqli_fetch_array($sqlAccounts)) { ?>
                <tr class="text-center">
                    <td><?php echo $results['client_id']?></td>
                    <td><?php echo $results['name']?></td>
                    <td><?php echo $results['email']?></td>
                    <td><?php echo $results['message']?></td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="submit" name="delete" value="DELETE" class="btn btn-danger">
                            <input type="hidden" name="deleteId" value="<?php echo $results['client_id']?>">
                        </form>
                    </td>
                    <td>
                        <form action="update.php" method="post">
                            <input type="submit" name="edit" value="EDIT" class="btn btn-primary">
                            <input type="hidden" name="editId" value="<?php echo $results['client_id']?>">
                            <input type="hidden" name="editName" value="<?php echo $results['name']?>">
                            <input type="hidden" name="editEmail" value="<?php echo $results['email']?>">
                            <input type="hidden" name="editMessage" value="<?php echo $results['message']?>">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
    <!-- cursor start -->
    <div class='cursor' id="cursor"></div>
    <div class='cursor2' id="cursor2"></div>
    <div class='cursor3' id="cursor3"></div>
    <!-- cursor end -->

    <!-- script js start -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/cursor.js"></script>
    <script src="js/animated.headline.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/simple-lightbox.jquery.min.js"></script>
    <script src="js/simple-lightbox.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- script js end -->
</body>
</html>