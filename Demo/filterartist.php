<!-- Saba Ruhee Jagirdar -> 1001848512 & Swaroop Belavadi Manjunatha -> 1001960012-->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>FILTER ARTIST</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Enter Artist Name or Aritst City or Artist Commission</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter Artist Name or Aritst City or Artist Commission">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
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

                                    if(isset($_GET['search']) or isset($_GET['search']) )
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM artist WHERE CONCAT (artist.name,artist.city,artist.commission) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['aID']; ?></td>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['birthDate']; ?></td>
                                                    <td><?= $items['deathDate']; ?></td>
                                                    <td><?= $items['commission']; ?></td>
                                                    <td><?= $items['street']; ?></td>
                                                    <td><?= $items['city']; ?></td>
                                                    <td><?= $items['stateAb']; ?></td>
                                                    <td><?= $items['zipcode']; ?></td>
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