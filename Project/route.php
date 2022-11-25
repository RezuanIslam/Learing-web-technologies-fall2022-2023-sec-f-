<?php
$route = $_POST['route'];

if ($route == 'Admin')
{
    echo "Hello";
    header('location: safin_part\login.php');
} 
else if ($route == 'Rider')
{
    header('location: rezuans_part/Rider_Login.php');
} 
else if ($route == 'Customer')
{
    header('location: konak/login.php');
} 
else if ($route == 'Restaurant')
{
    header('location: tuyn/log_in.php');
}