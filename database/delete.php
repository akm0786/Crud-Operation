<?php

include 'connectioncode.php';
$id=$_GET['id'];


$delete_query="delete from akm_table where id=$id";

$query=mysqli_query( $con,$delete_query);

	if($query){
?>

<script>

alert("Data Deleted  successfully!");

</script>
<?php
 header('location:select.php');
 }
else
  {
?>
<script>

alert("Problem occured ");

</script>
<?php
  }
?>



