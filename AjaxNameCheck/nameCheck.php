<?php 

    $typedText = $_POST['typeText'];

    if($typedText != null)
    {
        $host = "localhost";
        $dbname= "labDB";
        $dbpass = "";
        $dbuser = "root";
    
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        $sql = "select * from rider where username like '%{$typeText}%'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count > 0)
        {
            echo "<table border='1'>";
            while($row = mysqli_fetch_array($result)) 
            {
                echo "<tr>";
                echo "<td>".$row["username"]."</td>";  
                echo "<td>".$row["password"]."</td>"; 
                echo "<td>".$row["email"]."</td>";   
                echo "<td>".$row["address"]."</td>";  
                echo "</tr>";

                echo "<tr><td colspan='4'><hr></td></tr>"; 
            }
            echo "</table>";

        } 
        
    }
    else
    {
        echo "Null value";
    }

?>