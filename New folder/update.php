
<?php
 
	require_once("function.php");
	error_reporting(0);
	$id = $_GET['id'];
  $name = $_GET['name'];
  $amount = $_GET['amount'];
  $date = $_GET['date'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='style.css'>
	<title>Hospital Checkin</title>
	 <script>
      alert("Welcome to the data modification page");
   </script>
</head>
<body>
	<nav>
		<ul>
      <li><a href="http://localhost/Parent finance system/index.php"><h3>Insert Data</h3></a></li>
     <li><a href="http://localhost/Parent finance system/New%20folder/index.php"><h3>Records</h3></a></li>
        <li><a href="#"><h3>Data Modification</h3></a></li>
       </ul>
 	</nav>
 <form action="connect.php" method="Post">

    <div id="wrapper">
 	<div id="Container">
 		<div class=info>
    		<p><b>Parent ID</b></p>
 			<input name="id" type="text" name="name" placeholder="Parent id to update" value=<?php echo $id ?>>
 		</div>
    	<div class=info>
    		<p><b>Parent Name</b></p>
 			<input type="text" name="name" placeholder="Parent Name to update" value=<?php echo $name ?>>
 		</div>
 		
 		<div class="submit">
                  <button class="btn2"> Update</button>
                 </div>
              </div>
 		<div id="Container">
 	 		<div class=info>
 			<p><b>Amount Paid</b></p>
 			<input type="text" name="amount" placeholder="Amount Paid to update" value=<?php echo $amount ?>>
 		</div>
 		
 		<div class=info>
 			<p><b> Date</b></p>
 			<input type="date" name="date" id="date" value=<?php echo $date ?> required>
 		</div>
        
 		<a class="btn" href="http://localhost/Parent finance system/index.php">Back</a>
         	
 	</div>
<br>
 	
 </div>
 </form>
</body>
</html>