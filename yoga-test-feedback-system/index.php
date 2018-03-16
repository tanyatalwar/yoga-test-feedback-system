<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
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
	</style>
    
    

	<!-- <script>
		function validateform()
		{
			var question = document.myform.name.question;
			var option1 = document.myform.name.option1;
			var option2 = document.myform.name.option2;
			var option3 = document.myform.name.option3;
			var option4 = document.myform.name.option4;
			var option5 = document.myform.name.option5;
			var weight1 = document.myform.name.weight_1;
			var weight2 = document.myform.name.weight_2;
			var weight3 = document.myform.name.weight_3;
			var weight4 = document.myform.name.weight_4;
			var weight5 = document.myform.name.weight_5;


			

			if (name=="")
			{  
            alert("please check some field is empty");  
            return false;  
            }
		}	  
	</script> -->
	
</head>
<body style="max-width:100%;overflow-x:hidden;">
	<div class="nav"  style="width:110%;" onclick="location.href='index.php'">
		YOGA
    </div>



<form action="question_insertion.php" method="post" name="myform"  onsubmit="return checkform(this);">
<div style="padding-top:1%;padding-left:1%;font-size:2.5vh;">
<b>Enter Question:</b>
</div>
<div style="padding-top:1%;padding-bottom:1%;padding-left:1%;">
<textarea name="question" rows="4" cols="100" placeholder="ENTER QUESTION HERE.....">
</textarea>
</div>

<div style="padding-left:1%;font-size:2.2vh;padding-top:2%;">
<label><b>Option1</b></label>
<input class="option_1" type="text" name="option1" placeholder="option 1">
</br>
<label><b>Weight:</b></label>
<input type="text" name="weight_1" placeholder="weightage">
</div>
</br>	

<div style="padding-left:1%;font-size:2.2vh;">
<label><b>Option2</b></label>
<input class="option_2" type="text" name="option2"  placeholder="option 2">
</br>
<label><b>Weight:</b></label>
<input type="text" name="weight_2" placeholder="weightage">
</div>
</br>	

<div style="padding-left:1%;font-size:2.2vh;">
<label><b>Option3</b></label>
<input class="option_3" type="text" name="option3"  placeholder="option 3">
<br>
<label><b>Weight:</b></label>
<input type="text" name="weight_3" placeholder="weightage">
</div>	
</br>

<div style="padding-left:1%;font-size:2.2vh;">
<label><b>Option4</b></label>
<input class="option_4" type="text" name="option4"  placeholder="option 4">
<br>
<label><b>Weight:</b></label>
<input type="text" name="weight_4" placeholder="weightage">
</div>
</br>

<div style="padding-left:1%;font-size:2.2vh;">
<label><b>Option 5</b></label>
<input class="option_5" type="text" name="option5"  placeholder="option 5">
<br>
<label><b>Weight:</b></label>
<input type="text" name="weight_5" placeholder="weightage">
</div>	

<!-- <button type="submit">submit</button> -->
<div style="padding-left:1%;padding-top:2%;">
<button type="submit" class="btn" name="sub" style='padding-right:4%;padding-left:4%;padding-top:1%;padding-bottom:1%;font-size:2.5vh;'><b>Submit</b></button>
</div>

</form>	

<div style="padding-left:1%;padding-top:2%;">
<button type="button" class="btn btn-primary" onclick="location.href = 'reset.php';" style='padding-right:4%;padding-left:4.8%;padding-top:1%;padding-bottom:1%;font-size:2.5vh;'><b>Reset</b></button>
</div>

<div style="padding-left:1%;padding-top:2%;">
<button type="button" class="btn btn-info" onclick="location.href = 'retrival.php';"  style='padding-right:4%;padding-left:4.8%;padding-top:1%;padding-bottom:1%;font-size:2.5vh;'><b>Test</b></button>
</div>

<div style="padding-left:1%;padding-top:2%;">
<button type="button" class="btn btn-danger" onclick="location.href = 'report.php';"  style='padding-right:4%;padding-left:4.8%;padding-top:1%;padding-bottom:1%;font-size:2.5vh;'><b>Check report</b></button>
</div>



</body>
</html>