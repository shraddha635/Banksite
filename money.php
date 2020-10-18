<!DOCTYPE html>
<html>
<head>
	<title>send money</title>
	<style type="text/css">
		form{
			font-size: 40px;
			font-weight:30px;
			text-align: center;
			margin: auto;
			padding-top: 150px;
		}
		label{
			padding: 20px;
			justify-content: left;
			font-weight: 100px;
		}
		.container{
			width: 500px;
			
			padding-left: 500px;
		}
		.container input{
			width:100%;
			clear: both;
			height: 35px;
		}
		/*button{
			font-size: 30px;
      		padding: 10px 10px;
      		background-color: #071a3d; 
      		color: white;
		}*/
		.press{
			padding-top: 20px;
			padding-left: 650px;
		}
		body{
			background-image: url("https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-031.jpg");
			margin: 0;
		}
		.click{
			width: 20px;
			background-color: #071a3d;
			color: white;
			font-size: 25px;
		}
		.click:hover{
			background-color: black
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
	<div class="container">
		<form action="transfer.php" method="get">
			<label><b>Sender </b></label>
			<input list="names" type="text" name="sender_name", placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Shraddha"></option>
				<option value="Rajesh"></option>
				<option value="Raj"></option>
				<option value="Samay"></option>
				<option value="Yash"></option>
				<option value="Seema"></option>
				<option value="Ritika"></option>
				<option value="Ram"></option>
				<option value="Saurabh"></option>
				<option value="Puja"></option>
				
			</datalist>
		</br>
			<label><b>Receiver </b></label>
			<input list="namess" type="" name="receiver_name" placeholder="Enter email here" required>
			<datalist id="namess">
				<option value="Shraddha"></option>
				<option value="Rajesh"></option>
				<option value="Raj"></option>
				<option value="Samay"></option>
				<option value="Yash"></option>
				<option value="Seema"></option>
				<option value="Ritika"></option>
				<option value="Ram"></option>
				<option value="Saurabh"></option>
				<option value="Puja"></option>
				
			</datalist>
		</br>
			<label><b>Amount: </b></label>
			<input type="" name="amount" placeholder="Enter amount here" required>
			<input class="click" type="submit" name="" value="Send Money">

		</form>
	</div>

<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>

	</div> -->
	

</body>
</html>