<?php
	session_unset();
	session_destroy();
	header("Location:admin/index.php");
	header("Location:index.php");
?>