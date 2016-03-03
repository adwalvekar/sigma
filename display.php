<?php 
session_start();
if(isset($_SESSION['username'])){
	include('./include/dbcon.php');
	$username= $_SESSION['username'];
	$query="SELECT * FROM entries WHERE username='$username'";
	$result=mysqli_query($link,$query);
	if(mysqli_num_rows($result)>=1){
		$count=mysqli_num_rows($result);
		echo '{"status":true,"entries":[';
		 while($arr=mysqli_fetch_assoc($result)){
		 	echo json_encode($arr);
		 	if($count>1){
		 		echo',';
		 	}
		 	$count--;
		 }
		 echo "]}";
	}
	mysqli_close($link);
}else echo json_encode(array('status'=>false,'description'=>'Not Logged in. Please login first.'));