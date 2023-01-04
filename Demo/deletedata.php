<!-- Saba Ruhee Jagirdar -> 1001848512 & Swaroop Belavadi Manjunatha -> 1001960012-->

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE DATA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Enter Artist ID to delete the data</h4>
                    </div>
                    <div class="card-body">

                        <form action="deletecontroller.php" method="POST">
                            <div class="froum-group mb-3">
                                <label for="">Deleteing Artist ID</label>
                                <input type="text" name="delete_artist_id" class="form-control">
                            </div>
                            <div class="froum-group mb-3">
                                <button type="submit" name="artist_delete_btn" class="btn btn-primary">Delete Data</button>
                            </div>
                        </form>