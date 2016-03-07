<?php 
include_once 'include/redirect.php';
if(isset($_POST['username'])&&isset($_POST['password'])){
	include('./include/dbcon.php');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="SELECT * FROM users WHERE username= '$username' AND password='$password'";
	$result=mysqli_query($link,$query);
	if(mysqli_num_rows($result)==1){
		session_start();
		$arrayOutput= mysqli_fetch_assoc($result);
		$permission = $arrayOutput['permission'];
		$_SESSION['username']=$username;
		$_SESSION['permission']=$permission;
		pager('dashboard.php');

		}
	else echo json_encode(array('status' => false, 'description'=>'Wrong Username or Password'));
	mysqli_close($link);
}