<?php 

    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid'){
            echo "<center><p style='color:black; background-color:red;'>invalid username/password </p></center>";
        }  

        if($_GET['err'] == 'null'){
            echo "<center><p style='color:black; background-color:red;'> username/password not found</p></center>";
        }

        if($_GET['err'] == 'bad_request'){
            echo "please login first ...";
        }
    }

?>



<!DOCTYPE html>
<html>

  <body>
  <form action="../controller/loginValidation.php" method="post" style="display:inline-block; text-align: left; width: 15%; margin-left : 2% ;">
        <fieldset>
            <legend >LOGIN</legend>
            User Id &nbsp; </br> 
             <input type="email" name="email" value="" /> <br>
            
            Password &nbsp;  </br>
            <input type="password" name="password" value="" /> <br> <br>
            <input type="checkbox" name="checkbox" value="" /> Remember Me<br><br>
            
            <hr/>
            
            <button type="Login">Submit</button>
            <a href="../view/registration.php">Register</a>

           
        </fieldset>

    </form>
</body>
</html>