<?php
	include("openconn.php");
	// Usiamo un if principale per sapere se l'utente clicca il bottone per la registrazione.
	if (isset($_POST['register']))
	{	
		// Gestiamo gli errori di immissione tramite un apposito array.
		$errori = array();
		/* Tramite questa serie di if controlliamo se tutti i campi sono vuoti o meno
		   Nel caso lo siano inseriamo nell'array un'elemento relativo al campo vuoto. */
		if (!isset($_POST['nome']) || empty($_POST['nome']))
		{
			$errori = 'nome';
		}
		if (!isset($_POST['cognome']) || empty($_POST['cognome']))
		{
			$errori = 'cognome';
		}
		if (!isset($_POST['username']) || empty($_POST['username']))
		{
			$errori = 'username';
		}
		if (!isset($_POST['mail']) || empty($_POST['mail']))
		{
			$errori = 'mail';
		}
		if (!isset($_POST['password']) || empty($_POST['password']))
		{
			$errori = 'password';
		}
		if (!isset($_POST['COD']) || empty($_POST['COD']))
		{
			$errori = 'COD';
		}
		/* Se l'array non è vuoto (c'è almeno un campo lasciato vuoto) allora viene stampato
		   un messaggio di errore */
		if (!empty($errori))
		{
			echo "<script type=\"text/javascript\">
						alert( 'Devi riempire tutti i campi!' );
						</script>";
		} else
		{
		/* Nel caso tutti i campi siano stati compilati correttamente si accede alla funzione di
		   inserimento dei dati nel database */
		// Assegniamo i valori immessi nel form nelle rispettive variabili
			$nome = $_POST['nome'];
			$cognome = $_POST['cognome'];
			$username = $_POST['username'];
			//Per la crittografia della password usiamo un metodo sha1
			//il quale adotta una crittografia a 40 caratteri
			$password = ($_POST['password']);
			$mail = $_POST['mail'];
			$COD = $_POST['COD'];
			/* Utilizziamo questo semplice contatore per sapere se ci sono corrispondenze tra
			   la mail e l'username inserite nel form che devono essere uniche per ogni utente */
			$count = 0;
			
			/* Creiamo una query per estrapolare tutti gli utenti presenti nel database.
			   Ci sarà utile per confrontare i dati immessi con quelli esistenti. */
			$queryuser = "SELECT username, mail from orunesos.user
						  WHERE username = '{$username}' OR mail = '{$mail}'";
			$result = mysql_query($queryuser, $mysqli);
			
			if (mysql_num_rows($result) == 1)
			{
				echo "<script type=\"text/javascript\">
						alert( 'L'utente esiste già. Ti preghiamo di inserire una mail e/o un username diversi' );
						</script>";
			}
			else
			{
				$queryins = "INSERT INTO orunesos.user VALUES ('$username', '$nome', '$cognome', '$mail', '$password', '$COD')";
				$inserisci = mysql_query($queryins, $mysqli);
				echo "<script type=\"text/javascript\">
						alert( 'La registrazione è avvenuta con successo! Ti diamo il benvenuto nel nostro portale. Ora potrai usufruire di tutti i servizi.' );
						</script>";
			}
		}
	}
?>