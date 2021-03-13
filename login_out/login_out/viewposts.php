<?php    
require "conectdb.php";
// session_destroy();
if(isset($_SESSION['id'])){
 $id=$_SESSION['id'];  
 $sql = "select posts.* from posts inner join users on posts.userid=users.id where users.id=$id ";
 $op = mysqli_query($conn,$sql); 

?>

<!DOCTYPE HTML>
<html>

<head>
<title>View</title>

<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

<!-- custom css -->
<style>
  .m-r-1em {
      margin-right: 1em;
  }
  
  .m-b-1em {
      margin-bottom: 1em;
  }
  
  .m-l-1em {
      margin-left: 1em;
  }
  
  .mt0 {
      margin-top: 0;
  }
</style>

</head>

<body>

<!-- container -->
<div class="container">

  <div class="page-header">
      <h1>display data</h1><a href="logout.php">Log Out</a>||<a href="login.php">Log In</a>

  </div>

  <!-- PHP code to read records will be here -->

  <table class='table table-hover table-responsive table-bordered'>
      <!-- creating our table heading -->
      <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Content</th>
          <th>userid</th>
          <th>Action</th>
        
      </tr>



      <!-- table body will be here -->

<?php 
       while($data = mysqli_fetch_assoc($op)){

          //  echo .'<br>'.$data['name'];
        
          echo '<tr>';
      
          echo '<td>'.$data["id"].'</td>';
          echo '<td>'.$data["title"].'</td>';
          echo '<td>'.$data["content"].'</td>';
          echo '<td>'.$data["userid"].'</td>';
          echo "<td>";
          echo "<a href='delete.php?id=".$data['id']."' class='btn btn-danger m-r-1em'>Delete</a>";
          echo "<a href='edit.php?id=".$data['id']."' class='btn btn-primary m-r-1em'>Edit</a> ";
          echo "</td>";

          echo '</tr>';

        }

//


?>

      <!-- end table -->
  </table>

</div>
<!-- end .container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- confirm delete record will be here -->

</body>

</html>
<?php 
}
else{
    header("location:login.php");
}
?>