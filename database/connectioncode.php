<?php

$server="localhost:3307";
$userName='root';
$pass="root";
$db='akm_database';


$con=mysqli_connect($server,$userName,$pass,$db);


if($con){
?>

<script>

alert("connection successful");


</script>

<?php
}
else
{
?>
<script>

alert("connection lost ");


</script>
<?php

}
?>

