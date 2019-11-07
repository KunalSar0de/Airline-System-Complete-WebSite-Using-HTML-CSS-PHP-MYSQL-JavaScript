<?php
session_start();
$con=mysqli_connect('localhost','root');
$db=mysqli_select_db($con,'dbsearch');


if (isset($_POST['sub'])) 
{

	$username=$_POST['user'];
	$pass=$_POST['password'];

	$s="select * from usertable where name='$username' && password='$pass'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
		if($num==1){
			$_SESSION['user']=$username;
			header('location:btn.php');
		}
		else
		{
			header('location:login.php');
		}
}
?>

