<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];
	
	
   
$con = new mysqli('localhost','root','Mymammercy@1','mam_and_dad');


if($con){
	//echo "Connection successful";
	$sql = "insert into parent (PAR_ID, PAR_NAME, PAR_AMOUNT, PAT_DATE) values('$id', '$name', '$amount', '$date')";
	
	$result=mysqli_query($con,$sql);

	if($result){
		echo "Data inserted Successfully";
	}
	die(mysqli_error($con));
}
}
 ?>