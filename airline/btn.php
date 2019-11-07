<?php 
session_cache_limiter('private_no_expire');
session_start();
if (!isset($_SESSION['user'])) {
header('location:login.php');

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MINIPROJECT</title>
	<link rel="stylesheet"type=text/css href="btn.css">

	<link  rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
	
</head>
<body>
	<header>
		<div class="img"><img src=btn.jpg width="1366px" height="657px">							
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
			
			<div class="flex"style="height:90%;width: 23%">
					<div class="booking-box"style="height: 90%;width: 110%">
						<div class="radio-btn">
							
							<input type="radio" name="check"><span>One way</span>
						</div>
							
							<div class="booking-form">
								
								<label>Flying from</label>
								<select class="custom-select" name='txtSearch'>
									<option value="Select your choice" selected>Select Your Choice</option>
									<?php include 'db_connect.php';?>
									<?php while ($row1=mysqli_fetch_array($result1)):;?>
										<option value="<?php echo $row1[0];?>"  >
										<?php echo $row1[0];?>
										</option>
									<?php endwhile;?>
								</select>

								<br>
								<label>Flying To</label>
								<select class="custom-select" name='txtSearch1'>
									<option value="Select your choice" selected>Select Your Choice</option>
									<?php include 'db_connect.php';?>
									<?php while ($row2=mysqli_fetch_array($result2)):;?>
										<option value="<?php echo $row2[0];?>" >
										<?php echo $row2[0];?>
										</option>
									<?php endwhile;?>
								</select>			
								
								<div class="input-grp">
									<label>Departing</label>
									<input type="date" class="form-control select-date"name="depart" >			
								</div>
									
<!-- 								<div class="input-grp">
									
									<input type="hidden" class="form-control select-date" name="return">
								</div>
 -->
								<div class="input-grp">
								<label>Adults</label>
									<input type="number" class="form-control" value="1" name="adult" min="0">
								</div>

								<div class="input-grp">
									<label>Children</label>
									<input type="number" class="form-control" value="0" name="child1" min="0">
								</div>
							
								<div class="input-grp" >
										<label>Travel class</label>
										<select class="custom-select" name="clas">
											<option value="Economy Class">Economy Class </option>
											<option value="Buisness Class">Buisness Class</option>
										</select>
								</div>
								
								<div class="input-grp"style="position:absolute;top:90%;left: 15%">
									<button type="submit" name="submit" value="Go"class="btn btn-primary flight">Cost</button>
									</div>
							</div>
						</div>
						<div class="flx" style="position: absolute;left: 310%;top: 0px;background-color: #ff99ff;">
							<div class="tex" style="position: absolute;left: 10%;top: 2%;font-family: Monotype Corsiva;font-size: 1.8rem;">
						 	<?php echo "Welcome..",$_SESSION['user']?>
							</div>
							<div class="logout">
						   <a href="logout.php" class="btn btn-danger">Logout</a>
							</div>
						</div>
					</div>
			</div>
		
		</form>
		</div>
	</header>
</body>
</html>


<?php include("db_connect.php");?>
<?php
error_reporting(0);
global $adu,$child1,$tot;
	$option= $_POST['txtSearch'];
    $option1= $_POST['txtSearch1'];
	$dep=$_POST['depart'];
	$ret=$_POST['return'];
	$adu=$_POST['adult'];
	$child1=$_POST['child1'];
	$clas=$_POST['clas'];
	$_SESSION['adult']=$adu;
	$_SESSION['child1']=$child1;
	//	$_SESSION['total']=$total;
    
	
	// $s="select * from data where depart='$depart'"; 

	// $result=mysqli_query($conn,$s);

	// $in="insert into data(depart,adult,childrean,class)values('$dep','$adu','$child1','$clas')";
	// mysqli_query($conn,$in);
    
    display($option,$option1);
    
  function display($source,$destination)
    {
    	global $conn,$cost,$Time,$adu,$child1;
  
       $sql="select cost from tbl_search where source = '".$source."' and destination = '".$destination."'";
	   $cost=mysqli_query($conn,$sql);
	   $sdresult = mysqli_fetch_assoc($cost);

?>
  <div class="flex2">
	<div class="data">
		<label>Source:<?php echo $source;?></label> <br>

		<label>Destination:<?php echo $destination;?></label>
		<br>
		<label>Cost per passenger: <?php echo $sdresult['cost'];
		if($source==$destination)
			{
				echo ("");
			}
			else
			{
				echo " RS";
			}

		?></label><br>

		 <label>Adults:<?php echo "$adu";?></label>     													<label>Childs:<?php echo "$child1";?></label><br>
		 <?php 
		 $tot=$child1+$adu;
		 $total=$sdresult['cost'] * $tot;
		 ?>
		 <label>Total cost required: <?php echo $total;
		 if($source==$destination)
			{
				echo ("");
			}
			else
			{
				echo " RS";
			}?></label><br>
		 
	</div>
	
	<div style="border:2px Dashed black;width:100%; height:101%;">
		
			<div class="btn1">
				<a href="cust_reg.php" class="btn2"><br>B<br>o<br>o<br>k</a>

				<style>.btn1{	
					border: 2px solid #000 !important;
					position: absolute;top: 10%;
					left: 88.5%;
					height: 81%;
					width: 7%;
					font-size: 1.2rem;
			
					
					}
					.btn2{
						text-align: center;
						line-height: 32px;
						border: 2px solid #000 !important;
						height: 100%;
						width: 100%;
						position: absolute;
						color:black !important ;
						text-decoration: none !important;
						transition: 0.6s ease;
						background-color: #99ff99; 
						}
					.btn2:hover{
						background-color:#99ff99;
					    color:#fff !important;	
						}
				</style>
			</div>	
	
	</div>	
		
	</div>
	<div style="border:1px Dashed black;border-spacing:1px;position: absolute;left:85%;top:24%;height: 33%;">	
	</div>
 </div>
<?php              
}
?>
