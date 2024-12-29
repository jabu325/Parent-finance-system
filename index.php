<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='stylesheet.css'>
	<title>Parent finance System</title>
	<script>
	alert(" WELCOME TO JABULANI'S PARENT FINANCE SYSTEM 2024");
</script>
</head>
<body>
	<nav>
		<ul>
      <li><a href=""><h3>Home</h3></a></li>
     <li><a href="New folder/index.php"><h3>Records and Modification</h3></a></li>
        
       </ul>
 	</nav>
 <form action="connect.php" method="Post">

    <div id="wrapper">
 	<div id="Container">
 		<div class=info>
    		<p><b>Parent ID</b></p>
 			<input name="id" type="text" placeholder="e.g M1 = mam payment 1" required>
 		</div>
    	<div class=info>
    		<p><b>Parent Name</b></p>
 			<input type="text" name="name" placeholder="Parent Name" required>
 		</div>
	
 		
 		<div class="submit">
                  <button class="btn2">Submit</button>
                 </div>
              </div>
 		<div id="Container">

 		<div class=info>
 			<p><b>Payment Amount</b></p>
 			<input type="text" name="amount" placeholder="Amount paid">
 		</div>
 		<div class=info>
 			<p><b>Payment Date</b></p>
 			<input type="date" name="date" id="date">
 		</div>
        
 		<a class="btn" href="index.php">Clear Form</a>
         	
 	</div>
<br>
 	
 </div>
 </form>
</body>
</html>