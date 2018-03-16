<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "yoga"; 

$connection = mysqli_connect("$servername","$username","$password","$db");

$del1="delete from demoresponse";

$query_data_1 = mysqli_query($connection, $del1);

$del2="delete from question_set";

$query_data_2 = mysqli_query($connection, $del2);

 header('Location: index.php');
 exit();
?>