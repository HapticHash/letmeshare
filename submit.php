<?php
	include("connect.php");
	//session_start();
	$msg=$_POST['msg'];
	$state=$_POST['state'];
	echo $state;
	if($state=="1" && $msg!="")
	{
		$ins=mysqli_query($con,"INSERT INTO `lms` (`ID`, `inp`) VALUES (NULL, '$msg');");
	}
	else
	{
		$query=mysqli_query($con,"SELECT * from lms ORDER BY ID DESC");
		while($res=mysqli_fetch_assoc($query))
		{
			$show=$res['inp'];
			$img=strrev($show);
			$mg=explode('.',$img);
			$m=$mg[0];
			$arr=explode('.',$show);
			$bbb=explode(':',$show);
			$i=$arr[0];
			$j=$bbb[0];
				if($m=="gpj" || $m == "gepj" || $m=="gnp")
				{
					?><div id="card2" z-default='20'><img src="<?php echo $show ?>" width="200px" height="200px"></img><br><a href="<?php echo $show ?>"><?php echo $show ?></a> </div> <br>  <?php 
				}
				else if($j=="http" || $j=="https")
				{		
					?>
					<div id="card2" z-default='20'><iframe src="<?php echo $show ?>"></iframe><br><a href="<?php echo $show ?>"><?php echo $show ?></a> </div> <br>  <?php 
				}
				else if($i=="www")
				{
					?> <div id="card2" z-default='20'><iframe src="<?php echo "https://".$show ?>"></iframe><br><a href="<?php echo "http://".$show ?>"><?php echo $show ?></a> </div> <br>  <?php
				}
				else{
				?> <div id="card2" z-default='20'> <?php echo $res['inp']; ?> </div> <br>  <?php
				}
		}
	}
?>