<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_chairman where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:chairman.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>