<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Form validation</title> 
</head>
<body>
    <div class='container mt-4 bg-light'>
    <center> <h1>Form Validation</h1></center>
    <form action="" method="post" class="w-75 m-auto" id="hide" autocomplete="off">
       <label for="" class="h5">Name</label>
       <input type="text" class="form-control" placeholder="enter your name"name="name">
       <!-- codephp for name -->
       <?php 
       if(isset($_POST['submit'])){
       $name;$Tname;
       $name=$_POST['name'];
       $Tname="/^[A-Z]{1}[a-z]{2,9}$/";
       if((preg_match($Tname,$name))==0){
        echo "<div class='text-danger'>Note:please enter first char capital and max 10char!!</div>";
       }
    }
       ?>
       <!-- end -->
       <label for="" class="h5 mt-3">Email</label>
       <input type="email" class="form-control" placeholder="enter your email"name="email">
       <!-- test email -->
       <?php 
       if(isset($_POST['submit'])){
       $email;$Temail;
       $email=$_POST['email'];
       $Temail="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/";
       if((preg_match($Temail,$email))==0){
        echo "<div class='text-danger'>Note:please enter right email!!</div>";
       }
    }
       ?>
       <!-- end test -->
       <label for="" class="h5 mt-3">Phone</label>
       <input type="number" class="form-control" placeholder="enter your phone number"name="phone">
       <!-- test phone number -->
       <?php 
       if(isset($_POST['submit'])){
       $phone;$Tphone;
       $phone=$_POST['phone'];
       $Tphone="/^01[0125][0-9]{8}$/";
       if((preg_match($Tphone,$phone))==0){
        echo "<div class='text-danger'>Note:please enter 11 digit !!</div>";
       }
    }
       ?>
       <!-- end test -->
       <label for="" class="h5 mt-3">Facebook URL</label>
       <input type="text" class="form-control" placeholder="enter your facebook"name="facebook">
       <!-- test facebook url -->
       <?php 
       if(isset($_POST['submit'])){
       $facebook;$Tfacebook;
       $facebook=$_POST['facebook'];
       $Tfacebook="/(?:https?:\/\/)?(?:www\.)?facebook\.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-\.]*)/";
       if((preg_match($Tfacebook,$facebook))==0){
        echo "<div class='text-danger'>Note:please enter a right URL  !!</div>";
       }
    }
       ?>
       <!-- end test -->
       <label for="" class="h5 mt-3">About me</label>
       <textarea id="" cols="50" rows="3"class="form-control"
       placeholder="enter at least 50 char about you" name="comment"></textarea>
       <!-- test about  -->
       <?php 
       if(isset($_POST['submit'])){
       $about;$Tabout;
       $about=$_POST['comment'];
       $Tabout="/^.{50,}$/";
       if((preg_match($Tabout,$about))==0){
        echo "<div class='text-danger'>Note:please enter at least 50 char or digit !!</div>";
       }
    }
       ?>
       <!-- end test -->
       <label for="" class="h5 mt-2">Gender</label>
       <input type="radio"  name="gender" value='male'>male <input type="radio" name="gender" value='female'>female <br>
       <!-- check if select or not -->
       <?php 
       if(isset($_POST['submit'])){
       if(!isset($_POST['gender'])){

        echo "<div class='text-danger mb-2'>Note:please enter your gender !!</div>";
       }
    }
       ?>
       <!-- end check -->
       <input type="submit" class="btn btn-danger mb-4" name="submit" id="submit">
    </form>

    <?php
    
    if(isset($_POST['submit'])){
       
      if((preg_match($Tname, $name)==1)
       &&(preg_match($Temail, $email)==1)
       &&(preg_match($Tphone, $phone)==1)
       &&(preg_match($Tfacebook,$facebook)==1)){
            $gender=$_POST['gender'];
           echo "<table class='table table-dark mt-6'>
              <tr>
              <td>Name</td>
              <td>Email</td>
              <td>Phone</td>
              <td>Gender</td>
              <td>Facebook</td>
              </tr>
              <tr>
              <td>$name</td>
              <td>$email</td>
              <td>$phone</td>
              <td>$gender</td>
              <td>$facebook</td>
              </tr>
           
               </table>";
       }

        else echo "<div class='text-danger'><h5> Enter all data right. anladın mı! </h5></div>";
    
    }
      
       
        ?>


</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
 crossorigin="anonymous">
 </script>

</body>
</html>



