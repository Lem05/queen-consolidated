<?php
include "database.php";

if(isset($_POST['edit'])){
    $editId= $_POST['editId'];
    $editName= $_POST['editName'];
    $editEmail= $_POST['editEmail'];
    $editMessage= $_POST['editMessage'];
}
if (isset ($_POST ['update'])) {
    $updateId = $_POST['updateId'];
    $updateName = $_POST['updateName'];
    $updateEmail = $_POST['updateEmail'];
    $updateMessage = $_POST['updateMessage'];

    $queryUpdate = "UPDATE contact SET name = '$updateName', email = '$updateEmail', message = '$updateMessage' WHERE client_id = $updateId";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);

    echo '<script>alert("Updated Successfully")</script>';
    echo '<script>window.location.href="read.php"</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpDate Client</title>
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
                            <h2 class="d-flex justify-content-center mb-4 mt-5">Update Data</h2>
                            <div class="d-flex justify-content-center my-5">
                            <form action="update.php" method="post">
                                <input type="text" name="updateName" class="d-flex flex-column justify-content-center mb-4" placeholder="Name" value="<?php echo $editName?>" required>
                                <input type="email" name="updateEmail" class="d-flex flex-column justify-content-center mb-4" placeholder="Email" value="<?php echo $editEmail?>" required>
                                <textarea class="form-textarea" name="updateMessage" placeholder="Message" value="<?php echo $editMessage?>" required></textarea>
                                <input class="d-flex flex-column align-center justify-content-center mb-4 text-center btn btn-info fs-4" type="submit" name="update" value="UPDATE"/>
                                <input type="hidden" name="updateId" value="<?php echo $editId ?>"/>
                            </form>
                        </div>

    
</body>
</html>