<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> SELECT Document</title>

	<style>
		



		body{
	
			font-size: 20px;
			color: black;
			font-weight: bold;
			width: 100vh;
			height: 100vh;
		background-color: #f3ff52;
background-image: -webkit-linear-gradient(270deg, #f3ff52 25%, #FFE32C 100%);
background-image: -moz-linear-gradient(270deg, #f3ff52 25%, #FFE32C 100%);
background-image: -o-linear-gradient(270deg, #f3ff52 25%, #FFE32C 100%);
background-image: linear-gradient(270deg, #f3ff52 25%, #FFE32C 100%);


		}




	</style>
</head>
<body>
	
<h1>Database  </h1>




<table border="1" cellpadding="8" cellspacing="0">
	
<thead>
	
<th>Id</th>
<th>Name</th>
<th>Course</th>
<th>Age</th>
<th colspan="2">Operation</th>
</thead>

<tbody>
	
<?php


include 'connectioncode.php';

$select_query="select * from akm_table";

$query=mysqli_query($con,$select_query);


while ($result=mysqli_fetch_assoc($query)
) {

?>


<tr>
	
	<td> <?php  echo $result['id']  ?>  </td>
	<td> <?php  echo $result['name']  ?>  </td>
	<td> <?php  echo $result['course']  ?>  </td>
	<td> <?php  echo $result['age']    ?>  </td>
	<td><a href="update.php?id=<?php echo $result['id'];?>">edit</a></td>
	<td><a href="delete.php?id=<?php echo $result['id']; ?>">delete</a></td>
</tr>

<?php

}

?>



</tbody>	


</table>

<h2><a href="crud.php">Back</a></h2>
</body>
</html>