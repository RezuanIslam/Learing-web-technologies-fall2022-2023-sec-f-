<html>

<head>
    <title>SHOW PRODUCT</title>
</head>

<body>
    <form action="addProduct.php" method="POST" style="display: inline-block; border: 2px solid;">
        <fieldset>
            <legend><h3>DISPLAY</h3></legend>
            <table>
                <tr>
                    <th>NAME</th>
                    <th>PROFIT</th>
                </tr>

            
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'lab6');
                $sql = "SELECT * FROM addproduct";
                $addproduct = mysqli_query($connection, $sql);

                while ($addproduct = mysqli_fetch_array($addproduct)) {
                    if ($addproduct[3] == 'Yes') {
                        echo "<tr>";
                        echo "<td>{$addproduct[0]}</td>";
                        $profit = $addproduct[2] - $addproduct[1];
                        echo "<td>{$profit}</td>";
                        echo "<td><a href='edit_product.php?name={$addproduct[0]}'>edit</a></td>";
                        echo "<td><a href='delete_product.php?name={$addproduct[0]}'>delete</a></td>";
                        echo "</tr>";
                    }
                }
                ?>

            </table>
        </fieldset>
    </form>
</body>
</html>




