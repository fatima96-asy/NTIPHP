<?php
session_start();
$servername='localhost';
$username='root';
$pass='';
$dbname='signup';

$conn=mysqli_connect($servername,$username,$pass,$dbname);
if(!$conn){
    echo 'failed';
}
else{
    // echo 'connected';
}

?>