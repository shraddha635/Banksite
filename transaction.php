<!DOCTYPE html>
<html>
<head>
	<title>Transaction History</title>
	<style type="text/css">
		 table{
            width: 600px;
            height: 200px;
            color: black;
            font-size: 30px;
            border-color: white;
            
        }
        tr, th, td {
        	border: 3px solid #071a3d ;
        }
        th,td{
        	text-align: center;
        }
        th{
        	background-color: #071a3d ;
        	color: white;
        }
        body{
        	background-image: url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-031.jpg");
        	margin: 0;
        }
        .middle{
        	margin-left: auto;
        	margin-right: auto;
        }
        h1{
        	text-align: center;
        	font-size: 50px;
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
	<?php include'connection.php' ?>

	<h1>Transaction History</h1>

	

	<table class="middle">
    <thead>
        <tr>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>



		<?php $sql = "SELECT Sender, Receiver, Amount FROM transaction_history";
        $result = mysqli_query($conn, $sql);?>
    	<?php while( $row = mysqli_fetch_assoc($result)) : ?>

		<tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Sender']; ?></td>
            <td><?php echo $row['Receiver']; ?></td>
            <td><?php echo $row['Amount']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
	</table>




</body>
</html>