<?php
define('DIR','');
?>

<!DOCTYPE html>
<html>

<body style="background-color:orange">

	<form action="#" method="post" enctype="multipart/form-data">
		<div class="row">
	  	<div class="leftcolumn">
		    <div class="card">
		    	<div class="formheading mb-2"> Bank (Balance Enquery) </div>
		    	<table border="1">
		    		<tr>
		    			<th>Account Number</th>
		    			<td><input type="text" name="acno" id="acno"></td>
		    		</tr>
		    		<tr>
		    			<td colspan="2"><input type="submit" name="save" Value="SUBMIT"></td>
		    		</tr>
		    	</table>
		    </div>
		</div>
	</div>
	</form>
<center><a href="5.php">back</a></center>
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

$qry = mysqli_query($con,"SELECT * FROM bank where acno=".$_POST['acno']);
if (!$qry) {
	echo "Account nummber not found";
}else{
		$qry = mysqli_fetch_array($qry, MYSQLI_ASSOC);
		echo "Name :".$qry['fname']." ".$qry['lname']."<br>";
		echo "Total Balance is Rs.".$qry['balance'];
}
}
?>