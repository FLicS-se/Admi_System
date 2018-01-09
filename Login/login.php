<?php
require('dbconnect.php');

session_start();


if (!empty($_POST)) {
	if ($_POST['name'] != '' && $_POST['pass'] != '') {
		$sql = sprintf('SELECT * FROM login WHERE name="%s" AND pass="%s"', 
			mysql_real_escape_string($db, $_POST['name']),
			mysql_real_escape_string($db, $_POST['pass']))
		);
		$record = mysqli_query($db, $sql) or die(mysqli_error($db));
		if ($table = mysqli_fetch_assoc($record)) {
			// logon
			$_SESSION['name'] = $table['name'];
			$_SESSION['pass'] = time();
			header('Location: logon.php');
			exit();
		} else {
			$error['login'] = 'failed';
		}
		$error['login'] = 'blank';
	}


// if ($_POST['my_id'] == 'root' && $_POST['password'] == 'root00') {
//		$_SESSION['my_id'] = $_POST['my_id'];
//		$_SESSION['password'] = $_SESSION['password'];
//		header('Location: logon.php');
		
//	 	} else {
	 	// error jump
//		header('Location: error.php');
}
?>


