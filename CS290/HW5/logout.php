<?php
	session_start();
	include 'navigation.php';
	$old_user = $_SESSION['validUser'];
	unset($_SESSION['validUser']);
	session_destroy();
?>
<html>
<body>
	<h1> Log Out Page</h1>
	<?php
		if (!empty($old_user)) {
			echo 'User: '.$old_user.' is logged out';
		} else {
			echo 'You were not logged in!';
		}
	?>

</body>
</html>

