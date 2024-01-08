<html>
<head>
	<title>Logout</title>
</head>
<body>
<?php
	/* sessione attiva, la distrugge */
    session_start();
	$sname=session_name();
	session_destroy();
	header("Location: index.php");
?>
</body>
</html>