<?php
define('DIR','');
?>

<!DOCTYPE html>
<html>

<body style="background-color:orange"><center><h1>

	<form action="#" method="post" enctype="multipart/form-data">
		<div class="row">
	  	<div class="leftcolumn">
		    <div class="card">
		    	<div class="formheading mb-2">See Flight Peference! </div>
		    	<table border="1">
		    		<tr>
		    			<th>Passport Number</th>
		    			<td><input type="text" name="pnumber" id="pnumber"></td>
		    		</tr>
		    		<tr>
		    			<th>First Name</th>
		    			<td><input type="text" name="fname" id="fname"></td>
		    		</tr>
		    		<tr>
		    			<th>Last Name</th>
		    			<td><input type="text" name="lname" id="lname"></td>
		    		</tr>
		    		<tr>
		    			<th>Enter DOB</th>
		    			<td><input type="date" name="dob" id="dob"></td>
		    		</tr>
		    		<tr>
		    			<th>Select Gender</th>
		    			<td>
		    				<input type="radio" name="gender" value="Male"> Male 
		    				<input type="radio" name="gender" value="Female"> Female 
		    				<input type="radio" name="gender" value="Other"> Other 
		    			</td>
		    		</tr>
		    		<tr>
		    			<td colspan="2"><input type="submit" name="save" Value="SUBMIT"></td>
		    		</tr>
		    	</table>
		    </div>
		</div>
	</div>
	</form></h1></center>
</body>
<br><br><br><center><h1><a href="index.html">back</a></h1></center><br><br>
</html>

<?php
if (isset($_POST['save'])) {

	$con = mysqli_connect("localhost","root","","passport");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$query = mysqli_query($con,"INSERT INTO `passport`( `passport_no`, `fname`, `lname`, `dob`, `gender`) VALUES('".$_POST['pnumber']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['dob']."','".$_POST['gender']."')")or die(mysqli_error($con));
if ($query) {
	echo "<center><h1>data uploaded</h1></center>";
}else{
	echo "data Not uploaded";
}
}
?>