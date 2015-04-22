<?php
	if (Login())
	{
		if (isset($_SESSION['COD']))
		{
			if ($_SESSION['COD'] == "VENDITORE")
			{
				header("location: Venditori.php");
				exit;
			}
			else if($_SESSION['COD'] == "UTENTE")
			{
				header("location: Utenti.php");
				exit;
			}
		}
	}
	if (isset($_POST["login"]))
	{
		$usernamelog = $_POST['username'];
		$passlog = ($_POST['password']);
		
		$querylog = "SELECT username FROM orunesos.user WHERE username = '{$usernamelog}' AND password = '{$passlog}'";
		
		$risultato = mysql_query($querylog, $mysqli);
		
		$querytipo = "SELECT COD FROM orunesos.user WHERE username = '{$usernamelog}' AND password = '{$passlog}'";
		$risultatotipo = mysql_query($querytipo, $mysqli);
		$tipo = mysql_fetch_array($risultatotipo);
		$_SESSION['COD'] = $tipo['COD'];
		
		if (!$risultato)
		{
			die("La tabella selezionata non esiste".mysql_error());
		}
		if (mysql_num_rows($risultato) == 1)
		{
			// L'utente esiste.
			$trovato = mysql_fetch_array($risultato);
			$_SESSION['username'] = $trovato['username'];
			if($_SESSION['COD'] == "VENDITORE")
			{
				header("location:Venditori.php");
				exit;
			}
			else if($_SESSION['COD'] == "UTENTE")
			{
				header("location:Utenti.php");
				exit;
			}
		}
		else
		{
			// Username e/o password errati
			echo "<script type=\"text/javascript\">
						alert( 'Username e/o password errati.' );
						</script>";
		}
	}
?>