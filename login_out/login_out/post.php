

<?php    
require "conectdb.php";

if(isset($_SESSION['id'])){
     
    if(isset($_POST['btn'])){
$title=$_POST['title'];
$content=$_POST['content'];
$userid= $_SESSION['id'];
$sql = "INSERT INTO posts (title,content,userid) VALUES('$title','$content','$userid')";
$op = mysqli_query($conn,$sql); 

    }   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>view</title> 
 </head>
<body>

<div class="container mt-4 bg-light pb-3">
<center> <h3>Post</h3></center>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="w-75 m-auto">
<h5>Title</h5>
<input type="text"name="title"class="form-control">
<h5>article</h5>
<textarea name="content" id="" cols="5" rows="5" class="form-control"></textarea>
 
 <input type="submit"name="btn"class="btn btn-danger mt-2" value="Create">
 <a href="viewposts.php">View post</a>

</form>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
 crossorigin="anonymous">
 </script>

</body>
</html>
<?php 
}
else{
    header("location:login.php");
}
?>