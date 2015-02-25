<?php
	require_once("sessioni.php");
	
	// Azzeramento dell'arrai $_SESSION
	$_SESSION = array();
	
	//Le sessioni creano dei cookie di tipo session che contengono delle informazioni criptate.
	// Questi cookie devono comunque essere distrutti.
	// Se esiste il cookie di tipo sessione allora azzeralo.
	if (isset($_COOKIE[session_name()]))
	{
		setcookie(session_name(), '', time() - 50000);
	}
	
	// Distruggi la sessione.
	session_destroy();
	
	// Reindirizzamento alla pagina dell'area personale.
	header("Location: AreaPersonale.php");
	exit;
?>