<!-- Saba Ruhee Jagirdar -> 1001848512 & Swaroop Belavadi Manjunatha -> 1001960012-->

<?php
session_start();
$con = mysqli_connect("localhost","root","","art_gallery");

if(isset($_POST['update_data']))
{
    $aID = $_POST['aID'];
    $name = $_POST['name'];
    $query = "UPDATE artist SET name='$name' WHERE aID = '$aID' ";  
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: updatedata.php");
    }
    else
    {
        $_SESSION['status'] = "Data is not Updated, Please Try Again!";
        header("Location: updatedata.php");
    }
}

?>