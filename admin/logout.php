<html>
<body>
<?php
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("refresh:0,url=index.php");
	}
	unset($_SESSION['admin']);
	header("refresh:0;url=index.php");
?>
</body>
</html>
