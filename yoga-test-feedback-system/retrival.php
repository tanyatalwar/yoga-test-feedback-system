<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
	<style type="text/css" media="screen">
	@font-face
         {
	      font-family:'pfonts';
	      src:url('PatuaOne-Regular.ttf');
         }
	.nav
		{
			background-color: black;
			padding-bottom:0%;
			padding-top: 1%;
			color: white; 
			font-size:30px;
			font-family:'pfonts'; 
			padding-left: 4%;
		}	
	.fonts
	    {
	    font-family:'pfonts';
	    font-size:2.7vh;	
	    }

	    	
	</style>
	<script>
	function validateForm() {
    var x = document.forms["myForm"]["rollno"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
</head>
<body style="max-width:100%; overflow-x: hidden;">
<div class="nav"  style="width:110%;">
		YOGA
</div>

<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "yoga"; 

$connection = mysqli_connect("$servername","$username","$password","$db");

$query="SELECT * FROM question_set";

$query_data_1 = mysqli_query($connection, $query);

 echo "<form action='response_insertion.php' method='post' onsubmit='return validateForm()' name='myForm'>";
 echo "<div class='fonts' style='padding-top:2%;font-family:'pfonts';'><b>Please Enter your Roll Number:</b></div>";
 echo"<div style='padding-top:1%;padding-left:0.5%;'>";
 echo "<input class='rollno' type='integer' name='rollno'  placeholder='ROLL NUMBER*' style='padding-left:3%; font-size:2vh; padding-bottom:2%;'>";
 echo"</div>";
 echo "</br>";
$questionids=array();
while($row = mysqli_fetch_array($query_data_1)) 
{    
	echo "<div class='fonts' style='padding-left:1%;'>";
	 $questionNumber=$row["question_id"];
	 // echo "<b>Question Number</b>:{$row["question_id"]} </br>";
	 echo "<b>Question:</b>{$row["question"]} </br>";

	 echo "A){$row["option1"]}";
	 echo "<input type='radio' name='option[]' value='A' style='zoom:1.6'>";
     echo "</br>";

     echo "B){$row["option2"]}";
     echo "<input type='radio' name='option[]' value='B' style='zoom:1.6'>";
     echo "</br>";


     echo "C){$row["option3"]}";
     echo "<input type='radio' name='option[]' value='C' style='zoom:1.6'>";
     echo "</br>";

     echo "D){$row["option4"]}";
     echo "<input type='radio' name='option[]' value='D' style='zoom:1.6'>";
     echo "</br>";


     echo "E){$row["option5"]}";
     echo "<input type='radio' name='option[]' value='E' style='zoom:1.6'>";
     echo "</br>";

     echo "</br>";
     $questionids[]=$questionNumber;
     // echo "</div>";

}
// 
// print_r($questionids); 
foreach($questionids as $q)
{
 $query="INSERT INTO question_numbers(question_id,question_number) VALUES('','$q')";
 $query_data_2 = mysqli_query($connection, $query);
}

echo "<button type='submit' name='sub' value='show' class='btn btn-danger btn-lg' style='padding-left:3%;padding-right:3%;padding-top:1%;padding-bottom:1%;font-size:3vh;'>submit</button>";
echo "</div>";
echo"</form>";
?>
<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>


</body>
</html>

