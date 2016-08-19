<!DOCTYPE html>
<html>
<head>  
	<title>Let's Share</title>
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/jquery-2.2.0.js"></script>
	  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <link rel="stylesheet" type="text/css" href="css/style.css" >
	<script>
		function insert()
		{
			var msg=document.getElementById('inp').value;
			document.getElementById('inp').value="";
			$.post('submit.php',{msg:msg,state:'1'},function (data)
			{
				getit();
			});
		}
		function getit()
		{
			$.post('submit.php',{msg:'',state:''},function (data)
			{
				document.getElementById("card1").innerHTML=data;
			});
		}
	</script>

</head>

<body onload="javascript:getit()">

	<div class="card" z-default='20'>
    <br><img src="images/logo1.png"> <br> <br>
       <div id="form">
       		<center>
		    <div class="group">      
		      <input type="text" required onkeypress="if(event.keyCode == 13)insert();" name="inp" id="inp" style=" height: 40px; width: 600px;" autofocus>
		      <span class="highlight"></span>
		      <span class="bar"></span>
		      <label> Enter Here... </label>
		    </div>
		    </center>
         
		    <section class="buttons">
			  <div class="container">
			    <div class="btn btn-1"> 
			      <svg>
			        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
			      </svg>
			      <input type="submit" onclick="insert()" class="btn btn-1" name="postit" value="Post it >>">
			    </div>
			  </div> 
			</section>


            <center>  </> </center>	
	    </div>
    </div>
    <div id="card1" z-default='20'>
	Loading Chat.....
    </div>

</body>
</html>






 