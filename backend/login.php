<?php 
if(isset($_POST['username'])&&isset($_POST['password'])){
	include('./include/dbcon.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$q="SELECT * FROM users WHERE username= '$username' AND password='$password'";
	$r=mysqli_query($link,$q);
	if(mysqli_num_rows($r)==1){
		session_start();
		$x= mysqli_fetch_assoc($r);
		$permission = $x['permission'];
		$_SESSION['username']=$username;
		$_SESSION['permission']=$permission;
		echo json_encode(array('status'=>true));
	}
	else echo json_encode(array('status' => false, 'description'=>'Wrong Username or Password'));
	mysqli_close($link);
}