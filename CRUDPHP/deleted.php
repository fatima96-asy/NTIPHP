<?php 
     require('connectdb.php');


      if(isset($_GET['id'])){
          
        $id =  $_GET['id'];     
   
       $sql = "delete from users where id =".$id;
       
       $con =   mysqli_query($conn,$sql);    
   
          if($con){
             
              header("Location: index.php");

          }
          
          else{
              echo 'user can not deleted ';
          }
   
        }
        
        else{

          header("Location: index.php");
    
}

      




?>