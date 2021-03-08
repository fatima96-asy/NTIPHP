<?php 

   if(isset($_GET['id'])){
    include 'connectdb.php';
    function validate($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    
     $id=validate($_GET['id']);
     $sql="SELECT * FROM users where id=$id" ;
     $result = mysqli_query($conn, $sql);
    //  $id = $_GET['id'];

   }
   
   else{

    header("Location: index.php");

   }





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2> Update</h2>
        <form action="create.php" method="post">

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name"  value="<?php echo $data["name"]?>"   class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email"  value="<?php echo $data["email"]?>"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>


            <button type="submit" class="btn btn-danger">Update</button>
        </form>
    </div>

</body>

</html>