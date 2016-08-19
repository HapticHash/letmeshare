<?php
	include("connect.php");
	//session_start();
	$msg=$_POST['msg'];
	$state=$_POST['state'];
	echo $state;
	if($state=="1")
	{
		$ins=mysqli_query($con,"INSERT INTO `lms` (`ID`, `inp`) VALUES (NULL, '$msg');");
	}
	else
	{
		$query=mysqli_query($con,"SELECT * from lms ORDER BY ID DESC");
		while($res=mysqli_fetch_assoc($query))
		{
			?> <div id="card2" z-default='20'> <?php echo $res['inp']; ?> </div>   <?php
		}
	}
?>