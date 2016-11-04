<?php
include('searchcd.php');

if(isset($_POST['cname']))
{
	while($fetch=mysqli_fetch_array($result))
	{
		echo $fetch['name'];
	}
} else {
	echo "nothing";
}
?>