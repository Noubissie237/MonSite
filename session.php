<?php
	define('WEBROOT', ($_SESSION['last-time']));
	if((time())-(WEBROOT) > 5){
		// header('Location:index.php');
	}
	else{
		$_SESSION['last-time'] = time();
	}
?>