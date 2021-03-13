<?php
class system{
 protected   $name;
 protected   $email;
 protected   $password;
 protected   $nationalid;

}
class admin extends system{
        function __construct($nameadmin,$emailadmin,$passwordadmin,$nationalidadmin){
               $this->name =$nameadmin;
                $this->email =$emailadmin;
                $this->password=$passwordadmin;
                $this->nationalid=$nationalidadmin;
             }

            function getname(){
                return $this->name;
            }
            function getemail(){
                return $this->email;
            }
            function getpassword(){
                return $this->password;
            }
            function getid(){
                return $this->nationalid;
            }
}


class patient extends system{
    function __construct($nameadmin,$emailadmin,$passwordadmin,$nationalidadmin){
        $this->name =$nameadmin;
         $this->email =$emailadmin;
         $this->password=$passwordadmin;
         $this->nationalid=$nationalidadmin;
      }

     function getname(){
         return $this->name;
     }
     function getemail(){
         return $this->email;
     }
     function getpassword(){
         return $this->password;
     }
     function getid(){
         return $this->nationalid;
     }


}
class doctor extends system{
    function __construct($nameadmin,$emailadmin,$passwordadmin,$nationalidadmin){
        $this->name =$nameadmin;
         $this->email =$emailadmin;
         $this->password=$passwordadmin;
         $this->nationalid=$nationalidadmin;
      }

     function getname(){
         return $this->name;
     }
     function getemail(){
         return $this->email;
     }
     function getpassword(){
         return $this->password;
     }
     function getid(){
         return $this->nationalid;
     }
}
$admin1=new admin("fatma","fatmaasy@yahoo.com","1234","123456789");
echo $admin1->getpassword();
$patiant=new patient("fatma","fatmaasy@yahoo.com","1234","123456789");
echo $patiant->getname();
$doctor=new doctor("fatma","fatmaasy@yahoo.com","1234","123456789");
echo $doctor->getemail();


?>