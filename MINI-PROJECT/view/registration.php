<?php 


if(isset($_GET['err'])){
    if($_GET['err'] == 'null'){
        echo "<center><p style='color:black; background-color:red;'>Error!! Please Enter the Information </p></center>";
    }

    if($_GET['err'] == 'invalid'){
        echo "<center><p style='color:black; background-color:red;'>invalid username/password </p></center>";
    }

    if($_GET['err'] == 'bad_request'){
        echo "<center><p style='color:black; background-color:red;'>Please login first </p></center>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>



    </head>

  <body>
    <script>
    function validateForm() 
    {
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;
        if (password == "" || confirm_password == "") {
        alert("Name must be filled out");
        return false;
  }
}
</script>



  <form action="../controller/registrationValidation.php" method="post" style="display:inline-block; text-align: left; width: 15%;" >
        <fieldset>
            <legend >REGISTRATION</legend>
            Id  <br>
             <input type="text" id="id" name="id" value="" onkeyup="showHint(this.value)" /> <br>

            Password <br>
             <input type="password" name="password" value="" /> <br>
            
            Confirm Pasword &nbsp;<br>
             <input type="password" name="confirm_password" value="" /> <br>

            Name  <br>
            <input type="text" id="name" name="name" value="" onkeyup="showHint(this.value)" /> <br>

            Email <br>
             <input type="email" name="email" value="" /> <br>
            <label>User Type [User/Admin]</label>
             <select name="route" id="route">
                 <option>User</option>
                 <option>Admin</option>
   
                </select>
          
            
            

           
            <br />
            <hr />
            <button type="submit">Register</button>
            <a href="../view/login.php">Login</a>
        

        </fieldset>

    </form>



    









</body>
</html>