<?php 

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "yoga"; 

$connection = mysqli_connect("$servername","$username","$password","$db");


$roll_no=$_POST['rollno'];
$counter=0;

if (isset($_POST['sub']))
{
$check=$_POST['option'];	
echo $check;


foreach($check as $ch)
{

 echo $ch."<br>";
 $counter=$counter+1;
 echo $counter;
 $query="INSERT INTO demoresponse (question_id,response,rollno,counter) VALUES('','$ch','$roll_no','$counter')";
 $query_data_2 = mysqli_query($connection, $query);
 // header("Location:thanks_submit.html"); /* Redirect browser */
}

}
header("Location:thanks_submit.html"); /* Redirect browser */

?>
