<?php

if(isset($_GET['delete'])){
    include 'connection.inc.php';
$id=$_GET['delete'];
$delete="delete from jag_vice_chair where id=$id";
$result=mysqli_query($connection,$delete);
if($result)
    {
    header('location:vice_chairman.php');
    }
else
    {
        echo "Some error occurred!!";
    }
}
?>