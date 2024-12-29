<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$date = $_POST['date'];
	
	

$con = new mysqli('localhost','root','Mymammercy@1','mam_and_dad');

if($con){
	//echo "Connection successful";
	$sql = " update parent set PAR_NAME ='$name', PAR_AMOUNT='$amount', PAT_DATE='$date' WHERE PAR_ID ='$id'";

	$result=mysqli_query($con,$sql);
	if($result){
		echo "Data updated successfully";
	}else{
		die(mysqli_error($con));
	}
}else{
	die(mysqli_error($con));
}
}
 ?>