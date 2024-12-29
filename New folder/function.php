<?php
  
  require_once 'config.php';

  function display_data(){
  	global $con;
  	$query = 'select * from paren';
  	$result = mysqli_query($con, $query);
  	return $result;
  }

?>