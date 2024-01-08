<?php
function isLogged()
{
	if (isset($_SESSION['username'])) {
		return true;
	} else {
		return false;
	}
}
?>
