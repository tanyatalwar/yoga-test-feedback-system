<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "yoga"; 

$connection = mysqli_connect("$servername","$username","$password","$db");


if($_POST['question']=="")
{
 header('Location: index.php');
}
else
{
$question=$_POST['question'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$option5=$_POST['option5'];
$w1=$_POST['weight_1'];
$w2=$_POST['weight_2'];
$w3=$_POST['weight_3'];
$w4=$_POST['weight_4'];
$w5=$_POST['weight_5'];



 $sql = "INSERT INTO question_set (question_id,question, option1,option2,option3,option4,option5,w1,w2,w3,w4,w5)
VALUES ('','$question','$option1','$option2','$option3','$option4','$option5','$w1','$w2','$w3','$w4','$w5')";

$query_data_1 = mysqli_query($connection, $sql);
header('Location: main.html');
 exit();
}
 


?>	