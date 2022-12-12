<?php
    session_start();
    //require_once "../../views/rider/riderRegistration.php";

    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];
    $route = $_POST['route']
    

    


     if($name=="" || $email== "" || $id =="" || $password ==""  || $confirm_password =="" || $route ==""  )
     {
         header('location: ../view/registration.php?err=null');
         echo "try again";
     }
     else
     {      
        $connect=mysqli_connect('localhost','root','','labfinal');
           $sql= "INSERT INTO registration values('','{$password}','{$name}','{$email}', '{$route}')";
           
           $status=mysqli_query($connect,$sql);

          if($status)
          {
             header('location:../view/login.php');       

          }
        else 
        {
             
            echo "error";

        }
     }

?>