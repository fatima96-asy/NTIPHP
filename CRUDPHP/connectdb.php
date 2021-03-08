<?php
$servername='localhost';
$username='root';
$pass='';
$dbname='db_crud';

$conn=mysqli_connect($servername,$username,$pass,$dbname);
if(!$conn){
    echo 'failed';
}
else{
    echo '<a href="view.php" class="link-primary ">view</a> <br/>
    <a href="index.php" class="link-primary">return</a>
    ';
}





?>