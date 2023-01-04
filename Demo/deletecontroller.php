<!-- Saba Ruhee Jagirdar -> 1001848512 & Swaroop Belavadi Manjunatha -> 1001960012-->

<?php
session_start();
$con = mysqli_connect("localhost","root","","art_gallery");

if(isset($_POST['artist_delete_btn']))
{
    $aID = $_POST['delete_artist_id'];

    $query = "DELETE FROM artist WHERE aid='$aID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: deletedata.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted, Please Try Again!";
        header("Location: deletedata.php");
    }
}
?>