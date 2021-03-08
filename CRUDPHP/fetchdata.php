<?php   
include "connectdb.php";
$sql="SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>