<?php
include('config.php');
$name=$_POST['cname'];
$query="select * from cdetails where name LIKE '$name%'";
$result=mysqli_query($con,$query);
?>


