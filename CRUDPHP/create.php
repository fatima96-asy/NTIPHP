<?php
if(isset($_POST['create'])){
    include "connectdb.php";
function validate($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

$name=validate($_POST['name']);
$email=validate($_POST['email']);

$user_data="name:$name &email:$email";
if(empty($name)){
    header("location:index.php?error= name required");
}
else if(empty($email)){
    header("location:index.php?error= email required"); 
}
else {
    $sql="INSERT INTO users(name,email) VALUES('$name','$email')";
    $result=mysqli_query($conn,$sql);
}



}


?>