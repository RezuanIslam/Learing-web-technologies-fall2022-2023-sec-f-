<?php 

    $con = mysqli_connect('localhost', 'root', '', 'lab6');

    // if($con){
    //     echo "success";
    // }else{
    //     echo "error";
    // }

    $sql = "select * from addProduct";
    $result = mysqli_query($con, $sql);

    echo "<table border=1> 
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
            </tr>";

    while($data  = mysqli_fetch_assoc($result)){
        echo    "<tr>
                    <td>{$data['Name']}</td>        
                    <td>{$data['Profit']}</td>        
                           
                </tr>";
    }

    echo "</table>";
?>