
<?php
session_cache_limiter('private_no_expire');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Miniproject</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/csns/bootstrap.min.css">
</head>
</html>
<style>
	.container{
		border-radius: 10px;
		font-family: consolas;
		padding: 10px 20px;
		height: 250px;
		width: 330px;
		background: #000;
		color: #fff;
		top: 1%;
		position: relative;
		float: left;
		margin-top: 10px;
		margin-left: 110px;
		box-sizing: border-box;
		font-size: 1.3rem;
	} 
	h1{
		color: yellow;
		font-size: 1.8rem;
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
				border: 1px solid #fff !important;
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
echo "<body style='background:url(lastp.jpg);height: 97.5vh;'>";
?>

<?php
for ($i=1; $i<=$_SESSION['adult'] ; $i++) { 
?>	
<div class="main">
	<div class="container">


				<h1>Adult NO.<?php echo $i?></h1>
				
				<?php echo "First name: <b>".$_POST['firstname'.$i]."</b><br>"?>
				
     			<?php echo "Last name: <b>".$_POST['lastname'.$i]."</b><br>"?>

     			<?php echo "Age: <b>".$_POST['age'.$i]."</b><br>"?>

				<?php echo "Gender: <b>".$_POST['gender'.$i]."</b><br>"?>

					<?php  
				$result = uniqid();   
				echo "Ticket No:",$result; 
				?>   						
	</div>
</div>
<?php
}
?>
<?php
for ($j=1; $j<=$_SESSION['child1'] ; $j++) { 
?>	
<div class="main">
	<div class="container">
				
				<h1>Child NO.<?php echo $j?></h1>
				
				
				<?php echo "First name: <b>".$_POST['cfirstname'.$j]."</b><br>"?>
				
     			<?php echo "Last name: <b>".$_POST['clastname'.$j]."</b><br>"?>

     			<?php echo "Age: <b>".$_POST['cage'.$j]."</b><br>"?>

				<?php echo "Gender: <b>".$_POST['cgender'.$j]."</b><br>"?>

					<?php  
						$result = uniqid();   
						echo "Ticket No:",$result; 
						?>  		
	</div>
</div>
<?php
}
?>

<div class="footer">
<div class="button">
<a href="pay.php" class="btn">PAY</a>
</div>  
</div>
