<?php
$name = $_POST['name'];
$BuyingPrice = $_POST['BuyingPrice'];
$SellingPrice = $_POST['SellingPrice'];

$connection = mysqli_connect('localhost', 'root', '', 'lab6');
$sql = "INSERT INTO addproduct VALUES('{$Name}', '{$BuyingPrice}', '{$SellingPrice}', '')";
$status = mysqli_query($connection, $sql);

if ($status) {
    header('location: ShowProduct.php');
}