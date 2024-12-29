<?php 

require_once('config.php');
$query = "select * from parent ORDER BY PAR_ID ASC LIMIT 100";
$result = mysqli_query($con, $query);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Fetch and Modification</title>
	<link rel="stylesheet" href="stylesheet.css">

</head>
<body>
   

	<nav>
		<ul>
      <li><a href="http://localhost/Parent finance system/index.php"><h3>Insert Data</h3></a></li>
     <li><a href="http://localhost/Parent finance system\New folder\index.php"><h3>Records</h3></a></li>
        <li><a href="update.php"><h3>Data Modification</h3></a></li>
        <li class="srh">
         <form method="GET" action="search.php">
            <input type="text" name="query" placeholder="Search Parent ID">
            <input type="submit" value="Search">
         </form>
      </li>
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

         while($row = mysqli_fetch_assoc($result))
         {
         	?>
         	<td><?php echo $row['PAR_ID'] ?></td>
         	<td><?php echo $row['PAR_NAME'] ?></td>
         	<td><?php echo $row['PAR_AMOUNT'] ?></td>
         	<td><?php echo $row['PAT_DATE'] ?></td>


         	<div id='buttons'>
         	<td class="btn1"><a href="update.php?id='<?php echo $row['PAR_ID'] ?>'&name='<?php echo $row['PAR_NAME'] ?>'&amount='<?php echo $row['PAR_AMOUNT'] ?>'&date='<?php echo $row['PAT_DATE'] ?>'">Edit/Update </a>

            <td class="btn2"><a onclick="delete()" href="index.php?id='<?php echo $row['PAR_ID'] ?>'&amount='<?php echo $row['PAR_AMOUNT'] ?>'">Delete</a>
            </div>
         </tr>
         	<?php
         }
          ?>
          <?php
if(isset($_GET['id'])){
   $id =$_GET['id'];

      $delete = "DELETE FROM parent WHERE PAR_ID = $id";
  
      $confirm = mysqli_query($con, $delete);


      echo '<script>alert("Row has been deleted successfully, click the records button to confirm deletion");</script>';
       
               

                
   }else{
      echo '<script>alert("TAP RECORD BUTTON AFER EACH DELETE, DO NOT REFRESH PAGE");</script>';
   }
          ?>
 	</table>
 </div>
</body>
</html>