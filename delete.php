<?php
include 'conn.php';
extract($_GET);
$query="DELETE FROM USER WHERE id='$id'";
mysqli_query($conn,$query);
header('location:read.php');
?>