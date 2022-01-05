<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_facilities where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:facilities.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>