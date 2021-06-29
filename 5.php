<?php
define('DIR','');
?>

<!DOCTYPE html>
<html>

<body style="background-color:skyblue">
<center><h2>
	<form action="#" method="post" enctype="multipart/form-data">
		<div class="row">
	  	<div class="leftcolumn">
		    <div class="card">
		    <center>	<div class="formheading mb-2"> bank </div>
		    	<a href="5a.php">Create</a><br>
		    	<a href="5b.php">Debit</a><br>
		    	<a href="5c.php">Credit</a><br>
		    	<a href="5d.php">Balance Enquery</a><br></center>
		    </div>
		</div>
	</div>
	</form></h2></center>
</body>
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
	echo "data uploaded";
}else{
	echo "data Not uploaded";
}

}
?>