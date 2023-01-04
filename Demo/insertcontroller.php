<!-- Saba Ruhee Jagirdar -> 1001848512 & Swaroop Belavadi Manjunatha -> 1001960012-->

<?php
session_start();
$con = mysqli_connect("localhost","root","","art_gallery");

if(isset($_POST['insert_data']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $birthDate = mysqli_real_escape_string($con, $_POST['birthDate']);
    $sdeathDate = mysqli_real_escape_string($con, $_POST['deathDate']);
    $commission = mysqli_real_escape_string($con, $_POST['commission']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $stateAb = mysqli_real_escape_string($con, $_POST['stateAb']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);

    $query = "INSERT INTO artist(name,birthDate,deathDate,commission,street,city,stateAb,zipcode)VALUES('$name','$birthDate','$deathDate','$commission','$street','$city','$stateAb','$zipcode')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: insertdata.php");
    }
    else
    {
        $_SESSION['status'] = "Data is not Inserted, Please Try Again!";
        header("Location: insertdata.php");
    }
}

?>