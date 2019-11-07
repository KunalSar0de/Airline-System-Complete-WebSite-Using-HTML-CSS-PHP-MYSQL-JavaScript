<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="dbsearch";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
    $sql="SELECT DISTINCT source FROM tbl_search ";
    $result1=mysqli_query($conn,$sql);

    $sql1="SELECT DISTINCT destination FROM tbl_search ";
    $result2=mysqli_query($conn,$sql1);
    
    "INSERT INTO `data`(`depart`, `return`, `adult`, `childrean`, `class`) VALUES ('25/10/2019','28/10/19','2','1','Economy')";
?> 