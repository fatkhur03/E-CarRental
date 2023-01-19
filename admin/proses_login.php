<?php 

$username	= $_POST['username'];
$password = $_POST['password'];

$format = "$username|$password";
$file = file('config.txt', FILE_IGNORE_NEW_LINES);
if (in_array($format,$file)) { // jika data ditemukan
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

	header("location:sidebar_admin.php?url=dashboard");

}else{ //jika data tdk ditemukan ?>
	<script type="text/javascript">window
	alert('!! Ups... username dan Password yg kamu masukkan salah.');
	window.location.assign('index.php');
	</script>

<?php }