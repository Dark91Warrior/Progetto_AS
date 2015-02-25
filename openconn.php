<?php
	/*class Settings{
		public static $db_host = 'localhost';
		public static $db_user = 'Luca';
		public static $db_password = 'orune91';
		public static $db_name = 'orunesos'; } 
		// Classe che usa il db
		// Creo l'istanza della classe mysqli
	$mysqli = new mysqli();
	// Connessione al database
	$mysqli->connect(
		Settings::$db_host,
		Settings::$db_user,
		Settings::$db_password,
		Settings::$db_name);*/
		
	$mysqli = mysql_connect("localhost", "Luca", "orune91");
	if (!$mysqli)
	{
		die ("Connessione al database fallita!".mysql_error());
	}
	$db = mysql_select_db("orunesos", $mysqli);
	if (!$db)
	{
		die ("Connessione al database fallita!".mysql_error());
	}
?>