<?php	
	session_start();
	ob_start();
	echo 'Thank you for your order<br>Redirecting to the product page in 5 seconds.';
	if($_SESSION['image']{0}=='a'){
		header( "refresh:5;url=prom.php?a=1" );
	}else{
		header( "refresh:5;url=prod.php?a=1" );
	}
	ob_flush();
?>