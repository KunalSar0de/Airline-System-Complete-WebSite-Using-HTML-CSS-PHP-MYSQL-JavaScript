<?php
session_cache_limiter('private_no_expire');
session_start();
header('Cache-Control: no-store, no-cache, must-revalidate');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Minipro</title>
	

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
</html>

<style type="text/css">

		.container{
		border-radius: 10px;
		font-family: monospace;
		padding: 10px 20px;
		height: 380px;
		width: 300px;
		background: #000;
		color: #fff;
		top: 1%;
		position: relative;
		float: left;
		margin-top: 10px;
		margin-left: 110px;
		box-sizing: border-box;
		}
		.container h1{
			margin-top: -10px;
			font-family: Comic Sans MS;
			font-size: 1.5rem;
			text-align: center;

		}
		.container p{
			margin: 0;
			padding: 0;
			font-weight: bold;
			font-size: 0.8rem;

		}
		.container input{
			width: 100%;
			margin-bottom:5px; 
		}
		.container input[type="text"]{
			border:none;
			border-bottom: 1px solid #fff;
			background:transparent;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 16px;
		}
		.footer {
   			position: fixed;
  			left: 0;
   			bottom: 0;
   			height: 8%;
 			width: 100%;
   			background: rgba(173, 173, 133, 0.3); 
   			color: white;
   			text-align: center;
			}
			.button{
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%,-50%);

		}

			.btn{
				border: 2px solid #fff !important;
				padding: 5px 40px;
				color:white !important ;
				text-decoration: none;
				transition: 0.6s ease;
			}

			.btn:hover{
				background-color:#99ff99;
			    color:#000 !important;	
			}	
		
</style>
 


 <?php
echo "<body style='background:url(reg.png);height: 97.5vh;'>";
?>
<!-- *FOR ADULT* -->

<?php
error_reporting(0);
$adu = $_SESSION['adult'];
?>
<form action="lastpage.php" method="POST">
<?php
 for ($i=1; $i<=$adu; $i++) { 
?>
		<div class="main">
			<div class="container">
				<h1>Adult No.<?php echo $i?></h1>
				
				<p> First Name</p>
				<input class="form-control" id="firstname" type="text" placeholder="Enter First Name"name="firstname<?php echo $i ?>" required autocomplete="off"><br>
				<p>Last Name</p>
				<input class="form-control" id="lastname"  type="text" placeholder="Enter Last Name"name="lastname<?php echo $i ?>" required autocomplete="off"><br>

				<p>Age</p>
				<input class="form-control" id="age"  type="text" placeholder="Enter Age"name="age<?php echo $i ?>" min="18" max="100" required autocomplete="off"><br>
				<p>Gender</p>
				<input class="form-control" id="gender"  type="text" placeholder="Enter Genger"name="gender<?php echo $i ?>" required autocomplete="off"><br>
			
			
		</div>
<?php
}
?>


<!-- *FOR CHILD* -->
<?php
$child1 = $_SESSION['child1'];
?>


<?php
for ($j=1; $j<=$child1; $j++) { 
?>	
		<div class="main">
			<div class="container">
				
				<h1>Child NO.<?php echo $j?></h1>
				
				<p> First Name</p>
				<input class="form-control" id="firstname" type="text" placeholder="Enter First Name"name="cfirstname<?php echo $j ?>" required autocomplete="off"><br>

				<p>Last Name</p>
				<input class="form-control" id="lastname"  type="text" placeholder="Enter Last Name"name="clastname<?php echo $j ?>" required autocomplete="off"><br>

				<p>Age</p>
				<input class="form-control" id="age"  type="text" placeholder="Enter Age"min="0"name="cage<?php echo $j ?>" required autocomplete="off"><br>
			
				<p>Gender</p>
				<input class="form-control" id="gender"  type="text" placeholder="Enter Age"max="12"min="0"name="cgender<?php echo $j ?>" required autocomplete="off"><br>
			
			
			
			</div>
		</div>
<?php
 }
?>
<div class="footer">
  <div class="button">
	<input type="submit" value="Book"class="btn btn-primary"> 
	  </div>
</div>
</form>



