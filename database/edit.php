<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Document</title>

	

	<style>
			
			*{

				font-size: 30px;
			}

		body{

		width: 100vh;
		height: 100vh;
background-color: #FFE53B;
background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%);
	
background-repeat: no-repeat;

			margin: 0;
			padding: 0;

		}

		.main{
		

		padding-top: 100px;
		display: flex;
		justify-content: center;
		align-items: center;



		}
		::placeholder{

	font-size: 24px;
			color: red;
		}



	</style>
</head>
<body>
	

<div class="main">
	
<form method="POST" >

<?php

include 'connectioncode.php';
if(isset($_POST['submit']))
{start

$name=$_POST['name'];
$course=$_POST['course'];
$age=$_POST['age'];

$insert_query="insert into akm_table(name,course,age) values('$name','$course','$age') "; 


	$query=mysqli_query($con,$insert_query);

	if($query){
?>

<script>

alert("Data inserted  successfully!");


</script>

<?php
}
else
{
?>


<script>

alert("Problem occured ");


</script>
<?php

}

}
?>

<input type="text" name="name" placeholder="Enter Name" required>
<br><br>
<input type="text" name="course" placeholder="Enter Course"required>
<br><br>
<input type="number" name="age" placeholder="Enter Age" required>
<br><br>
<input type="submit" name="submit">



<div class="link">
	
		<h2><a href="select.php">Show Database </a></h2>
</div>

</form>


</div>



</body>
</html>


<?php

include 'connectioncode.php';
if(isset($_POST['submit']))
{//start

$name=$_POST['name'];
$course=$_POST['course'];
$age=$_POST['age'];

$insert_query="insert into akm_table(name,course,age) values('$name','$course','$age') "; 


	$query=mysqli_query($con,$insert_query);

	if($query){
?>

<script>

alert("Data inserted  successfully!");


</script>

<?php
}
else
{
?>


<script>

alert("Problem occured ");


</script>
<?php

}

}
?>


