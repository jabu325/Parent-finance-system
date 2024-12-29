<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>results page</title>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
	<nav>
		<ul>
      <li><a href="http://localhost/Parent finance system/index.php"><h3>Insert Data</h3></a></li>
     <li><a href="http://localhost/Parent finance system\New folder\index.php"><h3>Records</h3></a></li>
        <li><a href="update.php"><h3>Data Modification</h3></a></li>
       
       </ul>
 	</nav>
<div id="container">
   <table border="2" align="left">
      <tr class="top-table">
      <td>PARENT ID</td>
      <td>NAME</td>
      <td>AMOUNT</td>
      <td>DATE</td>
      <td>EDIT</td>
      <td>DELETE</td>
   </tr>
 	<tr class="in-table">
 		<?php 
    
require_once('config.php');

if (isset($_GET['query'])) {
    $searchQuery = mysqli_real_escape_string($con, $_GET['query']);
    
    // Perform a database query based on the search query
    $query = "SELECT * FROM parent WHERE PAR_ID LIKE '%$searchQuery%'";
    $result = mysqli_query($con, $query);
   
            if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result))
         {
         	?>
         	<td><?php echo $row['PAR_ID'] ?></td>
         	<td><?php echo $row['PAR_NAME'] ?></td>
         	<td><?php echo $row['PAR_AMOUNT'] ?></td>
         	<td><?php echo $row['PAT_DATE'] ?></td>
         	
         	<div id='buttons'>
         	<td class="btn1"><a href="update.php?id='<?php echo $row['PAR_ID'] ?>'&name='<?php echo $row['PAR_NAME'] ?>'&amount='<?php echo $row['PAR_AMOUNT'] ?>'&date='<?php echo $row['PAT_DATE'] ?>'">Edit/Update </a>

            <td class="btn2"><a onclick="delete()" href="index.php?id='<?php echo $row['PAR_ID'] ?>'&amount='<?php echo $row['PAT_DATE'] ?>'">Delete</a>
            </div>
         </tr>
         	<?php
         }
     }else{
     	echo '<script>alert("NO RESULT FOUND");</script>';
     }
          ?>

          <?php
if(isset($_GET['id'])){
   $id =$_GET['id'];
  
   

   
      $delete = "DELETE FROM parent WHERE PAR_ID = $id";
  
      $confirm = mysqli_query($con, $delete);


      echo '<script>alert("Hope you find what you searched for");</script>';
       
               

                
   }
}else{
   echo "Here we go again!";
}
   

          ?>
 	</table>
</div>
</body>
</html>
