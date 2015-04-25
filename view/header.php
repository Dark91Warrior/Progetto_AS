<html>
	<head>
		<title>Orunesos in su Munnu</title>
		<meta charset="utf-8"/>
		<meta name="keywords" content="HTML, CSS, PHP, MySQL, AMM">			 <!-- Nome  -->
		<meta name="description" content="Sito per gli orunesi nel mondo">	 <!-- Descrizione del sito -->
		<meta name="author" content="Luca Puggioninu">					  	 <!-- Nome autore -->
		<!--<meta http-equiv="refresh" content="30">              		   	 <!-- Aggiorna la pagina ogni 30 secondi -->
		<style type="text/css"></style>										 <!-- Stile della pagina che si trova nel documento CSS -->
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<script type="text/javascript"></script>
	</head>

		<header id = "header">
				<h1> Orunesos in su Munnu
					<div id = "userbar">
						<?php
							$userbar = "<form method='post' action='PagLogin.php'>
							<label for='username'>Username</label>
							<input type='text' name='username' id='username'/>
							<label for='password'>Password</label>
							<input type='password' name='password' id='password'/>
							<input type='submit' name='login' id='login' value='Login'/>
							</form>";
							if (isset($_SESSION['username']))
							{
								$username = $_SESSION['username'];
								$userbar = "<form method='post' action='logout.php'>
											Sei colleato come $username
											<input href='logout.php' type='submit' name='logout' id='logout' value='Logout'/>
											</form>";
							}
							echo $userbar;
						?>
					</div>
				</h1>
				<hr/>
				<p> Un sito che raggruppa gli abitanti di Orune sparsi nel mondo </p>
		</header>
		<body>
		
		</body>
</html>