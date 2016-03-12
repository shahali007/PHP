<?php
	session_start();
	
	$_SESSION['user'] = "";
	$_SESSION['login'] = "False";
	echo("<script>location.href='login.php'</script>");
?>