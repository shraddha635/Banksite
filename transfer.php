<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-image: url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-031.jpg");
			margin: 0;
		}
		h2{
			text-align: center;
			font-size: 80px;
		}
		
		button{
      font-size: 30px;
      padding: 25px 50px;
      justify-content: center;
      background-color: #071a3d;
      color:white;


    }
    .container{
    	padding-left: 625px;

    }
	</style>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	<div id="navbar">
  <a class="hi" href="index.php">HOME</a>
  <a class="hello" href="table.php">User List</a>
  <a class="bye" href="transaction.php">Transaction History</a>
  </div>
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name = $_GET["sender_name"];
	$receiver_name = $_GET["receiver_name"];
	$amount = $_GET["amount"];
	?>

	<?php $sql5="SELECT Name, Balance FROM Bank WHERE Name='$sender_name'";
	$result5=mysqli_query($conn, $sql5); 
	$row=mysqli_fetch_assoc($result5) ;
	$money= $row['Balance'];

	
	
	?>



	<?php $sql3 = "SELECT Name,Id  FROM Bank WHERE Name='$receiver_name' ";
	$result3 = mysqli_query($conn, $sql3); 
	
	if (mysqli_fetch_assoc($result3)<1){ 
	 	include 'user.php';
	 } 
	elseif ($money<$amount) {
	 	include 'user3.php';
	 	
	 }

	else{
	 	$sql4 = "UPDATE bank SET Balance=Balance-$amount WHERE Name='$sender_name'";
		$sql2= "UPDATE bank SET Balance=Balance+$amount WHERE Name='$receiver_name' ";
 		$result2 = mysqli_query($conn, $sql2); 
 		$result3 = mysqli_query($conn, $sql4);
 		$sql = "INSERT INTO transaction_history VALUES ('$sender_name',                '$receiver_name',  $amount)";
		$result = mysqli_query($conn, $sql); 
 		include 'user1.php';
 		

 	}



	?>
	
	

	



</body>
</html>