<!DOCTYPE html>
<html>
<head>
	<title>report generation</title>
	<style type="text/css" media="screen">
	@font-face
    {
	font-family:'pfonts';
	src:url('PatuaOne-Regular.ttf');
    }
		.nav
		{
			background-color: black;
			padding-bottom:1%;
			padding-top: 1%;
			color: white; 
			font-size:28px;
			font-family:'pfonts'; 
			padding-left: 4%;
		}

		.fonts
		{
			font-family:'pfonts'; 
		}

		.div1
		{
			padding-top:2%;
			padding-bottom:1%; 
		}
		.div2
		{
			padding-top:0%;
			padding-bottom:1%; 
		}
		.div3
		{
            padding-top:2%;
            font-size: 20px;
		}
		.font-color1
		{
			color:#7aaeff;
		}
		.font-color2
		{
			color:#9e4fff;
		}
		.font-color3
		{
			color:#00969b;
		}


        
	</style>

</head>
<body>
	<div class="nav">
		YOGA
	</div>

	<div class="fonts div3">
		<u>Report generated for the current test:</u>
	</div>

	<?php 
	
     $servername = "localhost";
     $username = "root";
     $password = "";
     $db = "yoga"; 
     
     $countA=0;
     $conn = new mysqli($servername, $username, $password, $db);
     $count_A="SELECT * FROM demoresponse WHERE response='A'";
     $resultA = $conn->query($count_A);

     if ($resultA->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultA->fetch_assoc()) 
       {
        $row["response"];
        $countA=$countA+1;
       }
      }

      echo"<div class='fonts div1 font-color1'>";
	  echo"NO OF STUDENT SELECTED A:";
	  echo $countA;
	  echo "</div>";

	  $weight1="SELECT w1 FROM question_set  limit 1";
	  $resultw1 = $conn->query($weight1);
	   if ($resultw1->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultw1->fetch_assoc()) 
       {
        $w1=$row["w1"];
       }
      }
      
      echo "<div class='fonts font-color2' style='padding-bottom:1%;'>";
      echo "RESULT FOR A ACCDORING TO WEIGHTAGE:";
      echo $countA*$w1;
      echo "</div>";

       
      $howmanyuser_query=$conn->query('SELECT COUNT(*)  FROM demoresponse;');
      $howmanyuser=$howmanyuser_query->fetch_array(MYSQLI_NUM); 
      $totalcount = $howmanyuser[0];
      $totalcount;

      echo "<div class='fonts font-color3' style='padding-bottom:1%;'>";
      echo "AVERAGE RESPONSE FOR A:";
      $per1= round($countA*100/$totalcount,2)."%";
      echo $per1;
      echo "</div>";

      $countB=0;
      $count_B="SELECT * FROM demoresponse WHERE response='B'";
     $resultB = $conn->query($count_B);

     if ($resultB->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultB->fetch_assoc()) 
       {
        $row["response"];
        $countB=$countB+1;
       }
      }

      echo"<div class='fonts div2 font-color1'>";
	  echo"NO OF STUDENT SELECTED B:";
	  echo $countB;
	  echo "</div>";


	  $weight2="SELECT w2 FROM question_set  limit 1";
	  $resultw2 = $conn->query($weight2);
	   if ($resultw2->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultw2->fetch_assoc()) 
       {
        $w2=$row["w2"];
       }
      }
      
      echo "<div class='fonts font-color2' style='padding-bottom:1%;'>";
      echo "RESULT FOR B ACCDORING TO WEIGHTAGE:";
      echo $countB*$w2;
      echo "</div>";

      echo "<div class='fonts font-color3' style='padding-bottom:1%;'>";
      echo "AVERAGE RESPONSE FOR B:";
      $per2 =  round($countB*100/$totalcount,2)."%"; 
      echo $per2;
      echo "</div>";
      

	  $countC=0;
      $count_C="SELECT * FROM demoresponse WHERE response='C'";
     $resultC = $conn->query($count_C);

     if ($resultC->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultC->fetch_assoc()) 
       {
        $row["response"];
        $countC=$countC+1;
       }
      }

      echo"<div class='fonts div2 font-color1'>";
	  echo"NO OF STUDENT SELECTED C:";
	  echo $countC;
	  echo "</div>";

	  $weight3="SELECT w3 FROM question_set  limit 1";
	  $resultw3 = $conn->query($weight3);
	   if ($resultw3->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultw3->fetch_assoc()) 
       {
        $w3=$row["w3"];
       }
      }
      

      echo "<div class='fonts font-color2' style='padding-bottom:1%;'>";
      echo "RESULT FOR C ACCDORING TO WEIGHTAGE:";
      echo $countC*$w3;
      echo "</div>";

      echo "<div class='fonts font-color3' style='padding-bottom:1%;'>";
      echo "AVERAGE RESPONSE FOR C:";
      $per3 = round($countC*100/$totalcount,2)."%";
      echo $per3;
      echo "</div>";
      
     
     //counting d solution
	  $countD=0;
      $count_D="SELECT * FROM demoresponse WHERE response='D'";
     $resultD = $conn->query($count_D);

     if ($resultD->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultD->fetch_assoc()) 
       {
        $row["response"];
        $countD=$countD+1;
       }
      }

      echo"<div class='fonts div2 font-color1'>";
	  echo"NO OF STUDENT SELECTED D:";
	  echo $countD;
	  echo "</div>";

	  $weight4="SELECT w4 FROM question_set  limit 1";
	  $resultw4 = $conn->query($weight4);
	   if ($resultw4->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultw4->fetch_assoc()) 
       {
        $w4=$row["w4"];
       }
      }
      
      echo "<div class='fonts font-color2' style='padding-bottom:1%;'>";
      echo "RESULT FOR A ACCDORING TO WEIGHTAGE:";
      echo $countD*$w4;
      echo "</div>";


      echo "<div class='fonts font-color3' style='padding-bottom:1%;'>";
      echo "AVERAGE RESPONSE FOR D:";
      $per4=round($countD*100/$totalcount,2)."%";
      echo $per4;
      echo "</div>";
      

	  //counting e solution
	  $countE=0;
      $count_E="SELECT * FROM demoresponse WHERE response='E'";
     $resultE = $conn->query($count_E);

     if ($resultE->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultE->fetch_assoc()) 
       {
        $row["response"];
        $countE=$countE+1;
       }
      }

      echo"<div class='fonts div2 font-color1'>";
	  echo"NO OF STUDENT SELECTED E:";
	  echo $countE;
	  echo "</div>";

	  $weight5="SELECT w5 FROM question_set  limit 1";
	  $resultw5 = $conn->query($weight5);
	   if ($resultw5->num_rows > 0) 
      {
    // output data of each row
    while($row = $resultw5->fetch_assoc()) 
       {
        $w5=$row["w5"];
       }
      }
      
      echo "<div class='fonts font-color2' style='padding-bottom:1%;'>";
      echo "RESULT FOR A ACCDORING TO WEIGHTAGE:";
      echo $countA*$w1;
      echo "</div>";

      echo "<div class='fonts font-color3' style='padding-bottom:1%;'>";
      echo "AVERAGE RESPONSE FOR E:";
      $per5= round($countE*100/$totalcount,2)."%";
      echo $per5;
      echo "</div>";
      
	?>	

<?php

      echo"<div class='fonts div2'>";
	  echo"<u>EACH QUESTION ANALYSIS:</u>";
	  echo "</div>";

$sql = "SELECT counter FROM demoresponse WHERE counter=(SELECT max(counter) FROM demoresponse);";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $row["counter"];
        $limit=$row["counter"];
    }
}
 else 
{
    echo "0 results";
}
// echo $limit;
$count=0;
for ($x = 0; $x <=$limit; $x++) 
{
    $q="SELECT * from demoresponse WHERE response='A' and counter='$x'";
    $res = $conn->query($q);
    if($res->num_rows > 0)
    {   
    	// $count=0
    	while($row = $res->fetch_assoc()) 
    	{
    		$row["rollno"];
    		$count=$count+1;
    		echo"<div class='fonts div2'>";
    		echo"number of student selected A for question $x:";
    		echo $count;
    		echo "</br>";
    		echo "</div>";
    	}
    	// echo"number of student selected option E";
    	// echo $count;
    }

} 
// $conn->close();
$count1=0;
for ($x = 0; $x <=$limit; $x++) 
{
    $q="SELECT * from demoresponse WHERE response='B' and counter='$x'";
    $res = $conn->query($q);
    if($res->num_rows > 0)
    {   
    	// $count=0
    	while($row = $res->fetch_assoc()) 
    	{
    		$row["rollno"];
    		$count1=$count1+1;
    		echo"<div class='fonts div2'>";
    		echo"number of student selected B for question $x:";
    		echo $count1;
    		echo "</br>";
    		echo "</div>";
    	}
    }

} 

$count2=0;
for ($x = 0; $x <=$limit; $x++) 
{
    $q="SELECT * from demoresponse WHERE response='C' and counter='$x'";
    $res = $conn->query($q);
    if($res->num_rows > 0)
    {   
    	// $count=0
    	while($row = $res->fetch_assoc()) 
    	{
    		$row["rollno"];
    		$count2=$count2+1;
    		echo"<div class='fonts div2'>";
    		echo"number of student selected C for question $x:";
    		echo $count2;
    		echo "</br>";
    		echo "</div>";
    	}
    }

} 

$count3=0;
for ($x = 0; $x <=$limit; $x++) 
{
    $q="SELECT * from demoresponse WHERE response='D' and counter='$x'";
    $res = $conn->query($q);
    if($res->num_rows > 0)
    {   
    	// $count=0
    	while($row = $res->fetch_assoc()) 
    	{
    		$row["rollno"];
    		$count3=$count3+1;
    		echo"<div class='fonts div2'>";
    		echo"number of student selected D for question $x:";
    		echo $count3;
    		echo "</br>";
    		echo "</div>";
    	}
    }

} 

$count4=0;
for ($x = 0; $x <=$limit; $x++) 
{
    $q="SELECT * from demoresponse WHERE response='E' and counter='$x'";
    $res = $conn->query($q);
    if($res->num_rows > 0)
    {   
    	// $count=0
    	while($row = $res->fetch_assoc()) 
    	{
    		$row["rollno"];
    		$count4=$count4+1;
    		echo"<div class='fonts div2'>";
    		echo"number of student selected E for question $x:";
    		echo $count4;
    		echo "</br>";
    		echo "</div>";
    	}
    }

} 



$conn->close();

?>
<style type="text/css" media="screen">
/* Make sure that padding behaves as expected */
* {box-sizing:border-box}

/* Container for skill bars */
.container {
    width: 100%; /* Full width */
    background-color: #ddd; /* Grey background */
}

.skills {
    text-align: right; /* Right-align text */
    padding-right: 20px; /* Add some right padding */
    line-height: 40px; /* Set the line-height to center the text inside the skill bar, and to expand the height of the container */
    color: white; /* White text color */
}
<?php
echo".html {width:$per1; background-color:#2196F3;}";
echo".css {width:$per2; background-color:#4265f4;}";
echo".js {width:$per3; background-color: #0c0d44;} ";
echo".php {width:$per4; background-color: #fc6e6c;}";
echo ".laravel{width:$per5; background-color:#f44336;}";
?>
	
</style>

<div class="fonts">
	<u>GRAPHICAL REPRESENTATION:</u>
</div>

<p><b>A</b></p>
<div class="container">
  <div class="skills html"><?php echo $per1;?></div>
</div>

<p><b>B</b></p>
<div class="container">
  <div class="skills css"><?php echo $per2;?></div>
</div>

<p><b>C</b></p>
<div class="container">
  <div class="skills js"><?php echo $per3;?></div>
</div>

<p><b>D</b></p>
<div class="container">
  <div class="skills php"><?php echo $per4;?></div>
</div>

<p><b>E</b></p>
<div class="container">
  <div class="skills laravel"><?php echo $per5;?></div>
</div>


<body>
</html>