<?php
define('DIR','');
session_start();
?>

<!DOCTYPE html>
<html>

<body style="background-color:skyblue">
<center><h1>
	<form action="2a.php" method="post" enctype="multipart/form-data">
		<div class="row">
	  	<div class="leftcolumn">
		    <div class="card">
		    	<div class="formheading mb-2">JSD FLIGHTS </div>
		    	<div>
		    		<label>Thank You for choosing JSD Flight</label>
		    	</div>
		    	<div>
		    		<label>The Cookie values are</label>
		    	</div>
		    	<div>
		    		<label>Name : <?php echo $_COOKIE["name"]; ?></label><br>
		    		<label>Seat : <?php echo $_COOKIE["seat"]; ?></label><br>
		    		<label>Food : <?php echo $_COOKIE["meal"]; ?></label><br>
		    		<label>---------------------------------------------------</label>
		    	</div>
		    </div>
		</div>
	</div>
	</form></h1>
</center>
<center><a href="2.php">back</a></center>
</body>
</html>