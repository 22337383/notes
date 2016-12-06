<?php 
$username = $_POST['username'];
$password = $_POST['password'];
if($username == 'aaa' && $password == 'aaa'){
	echo 2;
}else{
	echo 1;
}
?>