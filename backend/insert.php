<?php 
session_start();
if(isset($_SESSION['username'])){
	include('./include/dbcon.php');
	if(isset($_POST['entries'],$_POST['title'])){
		$entries=$_POST['entries'];
		$title=$_POST['title'];
		$username=$_SESSION['username'];

		$q="INSERT INTO entries VALUES (default,'$entries','$username','$title')";
		$r= mysqli_query($link,$q);
		if($r){
			echo json_encode(array('status'=>true,'description'=>"Done"));
		}else echo json_encode(array('status'=>false,'description'=>'SQL Error'));
	}else echo json_encode(array('status'=>false,'description'=>'Missing Data'));
	mysqli_close($link);
}else echo json_encode(array('status'=>false,'description'=>'Not Logged in. Please Login first'));