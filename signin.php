<?php 
	require "config.php";
	$loginURL=$googleClient->createAuthUrl();
	echo $loginURL;
	exit();
?>

<html>
	<head>
	</head>
	<body>
		<form>
			<input type="button" onclick="window.location='<?php echo $loginURL; ?>'" name="gmail" />
		</form>	
	</body>	
</html>