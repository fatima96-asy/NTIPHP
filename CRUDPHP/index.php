<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>crud</title> 
 </head>
<body>
<div class="container mt-4 bg-light">
<center> <h3>CRUD APP</h3></center>
<form action="create.php" method="post" class="w-75 m-auto" >
   <?php   
   if((isset($_GET['error'])==1)){
     $get_error=$_GET['error'];
    echo "<div class='alert alert-danger' role='alert'>$get_error</div>";
   
  } 
  ?>
   <!-- ___________________ -->
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" id="text1" name="name" placeholder="Enter name">
  </div>

  <div class="form-group">
  <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>
  
  <button type="submit" class="btn btn-primary mt-3 mb-3"name="create">Create</button>
 <a href="view.php" class="link-primary ">view</a>
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