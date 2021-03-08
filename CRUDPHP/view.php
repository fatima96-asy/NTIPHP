<?php 
include "fetchdata.php";


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
<center> <h3>VIEW TABLE</h3></center>
<table class="table table-dark w-75 m-auto mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th> 
      <th scope="col">Actions</th> 
    </tr>
  </thead>
  <tbody>
  <?php 
             while($data = mysqli_fetch_assoc($result)){
              
                echo '<tr>';
            
                echo '<td>'.$data["id"].'</td>';
                echo '<td>'.$data["name"].'</td>';
                echo '<td>'.$data["email"].'</td>';
                echo "<td>";
                echo "<a href='deleted.php?  id=".$data['id']."' class='btn btn-danger m-r-1em'>Delete</a>";
                echo "<a href='updated.php?    id=".$data['id']."' class='btn btn-primary m-r-1em'>Updated</a> ";
                echo "</td>";

                echo '</tr>';

              }


?>
  </tbody>
</table>
<div class="link-right ">

<a href="index.php" class="link-primary"><button class="btn btn-danger">create</button></a>
</div>


</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
 crossorigin="anonymous">
 </script>

</body>
</html>