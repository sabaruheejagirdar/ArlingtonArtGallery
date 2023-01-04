<!-- Saba Ruhee Jagirdar -> 1001848512 & Swaroop Belavadi Manjunatha -> 1001960012-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARTISTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>ARTIST DETAILS</h4>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>BirthDate</th>
                                    <th>DeathDate</th>
                                    <th>Commission</th>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State Abbrevation</th>
                                    <th>Zipcode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","art_gallery");

                                    $query = "SELECT * FROM artist";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['aID']; ?></td>
                                                <td><?= $row['name']; ?></td>
                                                <td><?= $row['birthDate']; ?></td>
                                                <td><?= $row['deathDate']; ?></td>
                                                <td><?= $row['commission']; ?></td>
                                                <td><?= $row['street']; ?></td>
                                                <td><?= $row['city']; ?></td>
                                                <td><?= $row['stateAb']; ?></td>
                                                <td><?= $row['zipcode']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>