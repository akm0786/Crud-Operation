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
 
 $id=$_GET['id'];

$select_query="select * from akm_table where id=$id";

$query=mysqli_query($con,$select_query);


$result=mysqli_fetch_assoc($query); 


if(isset($_POST['submit']))
{

 $id=$_GET['id'];

$name=$_POST['name'];
$course=$_POST['course'];
$age=$_POST['age'];


$update_query="update  akm_table set id=$id,name='$name',course='$course',age='$age' where id=$id"; 


	$query=mysqli_query($con,$update_query);

	if($query){
?>

<script>

alert("Data Updated successfully!");


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

<h2><a href="crud.php">Home</a></h2>


<input type="text" name="name" placeholder="Enter Name" value="<?php echo $result['name'] ?>" required>
<br><br>
<input type="text" name="course" placeholder="Enter Course" value="<?php echo $result['course'] ?>" required>
<br><br>
<input type="number" name="age" placeholder="Enter Age" value="<?php echo $result['age'] ?>" required>
<br><br>
<input type="submit" name="submit">



<div class="link">
	
		<h2><a href="select.php">Show Database </a></h2>
</div>

</form>


</div>



</body>
</html>



