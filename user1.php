<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>
	
</head>
<body>
  
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name = $_GET["sender_name"];
	$receiver_name = $_GET["receiver_name"];
	$amount = $_GET["amount"];
	?>
	<h2>Congratulations!! Transfer to <?php echo $receiver_name ?> successful</h2>

</body>
</html>