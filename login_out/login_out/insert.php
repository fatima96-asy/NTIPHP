<?php
if(isset($_POST['sign'])){
    
include "conectdb.php";
function validate($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

$name=validate($_POST['name']);
$email=validate($_POST['email']);
$phone=validate($_POST['phone']);
$password=validate(md5($_POST["pass"]));

// $user_data="name:$name &email:$email";
if(empty($name)){
    header("location:signup.php?error= name required");
}
else if(empty($email)){
    header("location:signup.php?error= email required"); 
}
else if(empty($phone)){
    header("location:signup.php?error= phone required"); 
}
else if(empty($password)){
    header("location:signup.php?error= password required"); 
}
else{
    $sql="INSERT INTO users (name,email,phone,password) VALUES('$name','$email','$phone','$password')";
    $result=mysqli_query($conn,$sql);
    header("location:login.php");
}
}