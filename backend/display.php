<?php 
session_start();
if(isset($_SESSION['username'])){
	include('./include/dbcon.php');
	$username= $_SESSION['username'];
	$q="SELECT * FROM entries WHERE username='$username'";
	$r=mysqli_query($link,$q);
	if(mysqli_num_rows($r)>=1){
		$i=mysqli_num_rows($r);
		echo '{"status":true,"entries":[';
		 while($arr=mysqli_fetch_assoc($r)){
		 	echo json_encode($arr);
		 	if($i>1){
		 		echo',';
		 	}
		 	$i--;
		 }
		 echo "]}";
	}
	mysqli_close($link);
}else echo json_encode(array('status'=>false,'description'=>'Not Logged in. Please login first.'));