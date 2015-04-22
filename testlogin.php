<?php
	function Login()
	{
		return isset($_SESSION['username']);
	}
	
	function ConfermaLogin()
	{
		if (!Login())
		{
			header("Location: PagLogin.php");
			exit;
		}
	}
?>