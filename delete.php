<?php
session_start();
include "conn.php";
$id=$_REQUEST['sic'];
$sql=mysqli_query($conn,"DELETE FROM `registration` WHERE sic=$id");
if($sql){
    $sql=mysqli_query($conn,"DELETE FROM `facility_mapping` WHERE sic=$id");
}
if($sql){
    header("location:project.php?DELETED");
}
else{
    header("location:project.php?UNABLE TO DELETE");
}
?>