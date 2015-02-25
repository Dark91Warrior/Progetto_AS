<!DOCTYPE html>
<?php
	require_once('sessioni.php');
	require_once('testlogin.php');
	// Includiamo le funzioni utili per utilizzare il database del sito
	include("openconn.php");
?>
<html>
	<?php
		// L'header viene incluso in ogni pagina poiché è uguale per tutte
		require("view/header.php");
	?>
		<body>
			<div id = "sidebar1">
				<a href="Home.php"> Home </a>
				<br/>
				<a href="Orune.php"> Orune </a>
				<br/>
				<a href="Storia.php"> Storia </a>
				<br/>
				<a href="Archeologia.php"> Archeologia </a>
				<br/>
				<a href="ProdottiTipici.php"> Prodotti tipici </a>
				<br/>
				<a class ="corrente" href="AreaPersonale.php"> Area Personale </a>
				<br/>
				<a href="Prova.php"> Prova </a>
			</div>
			<div id = "content">
				<h2> Login </h2>
				
				
				<!-- Codice relativo al login e al passaggio alle aree riservate. -->
				<?php
					if (Login())
					{
						header("location: Prova.php");
						exit;
					}
					
					if (isset($_POST["login"]))
					{
						$usernamelog = $_POST['username'];
						$passlog = ($_POST['password']);
						
						$querylog = "SELECT username FROM orunesos.user WHERE username = '{$usernamelog}' AND password = '{$passlog}'";
						
						$risultato = mysql_query($querylog, $mysqli);
						
						if (!$risultato)
						{
							die("La tabella selezionata non esiste".mysql_error());
						}
						if (mysql_num_rows($risultato) == 1)
						{
							// L'utente esiste.
							echo "Login effettuato correttamente.";
							$trovato = mysql_fetch_array($risultato);
							$_SESSION['username'] = $trovato['username'];
							header("location:Prova.php");
							exit;
						}
						else
						{
							// Username e/o password errati
							echo "Username e/o password errati";
						}
					}
				?>
				
				
				<!-- A differenza del GET, il POST non invia i dati nella barra degli indirizzi. -->
				<!-- Codice per il form...il campo action rappresenta la pagina a cui si verrà reindirizzati una volta premuto il pulsante.-->
				<form method="post" action="AreaPersonale.php">
						<label for="username">Username</label>
						<input type="text" name="username" id="username"/> 
						<br/>
						<label for="password">Password</label>
						<input type="password" name="password" id="password"/>
						<br/>
						<input type="submit" name="login" id="login" value="Login"/>
						<br/>
                </form>
				
				
				
				
				
				<h2> Non sei ancora un nostro utente? Registrati! </h2>
				<form method="post" action="AreaPersonale.php"> <!-- Codice per il form...il campo action rappresenta la pagina a cui si verrà reindirizzati una volta premuto il pulsante.-->
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome"/> 
						<br/>
						<label for="cognome">Cognome</label>
						<input type="text" name="cognome" id="cognome"/> 
						<br/>
						<label for="username">Username</label>
						<input type="text" name="username" id="username"/> 
						<br/>
						<label for="email">Mail</label>
						<input type="email" name="mail" id="mail"/> 
						<br/>
						<label for="password">Password</label>
						<input type="password" name="password" id="password"/>
						<br/>
						<input type="submit" name="register" id="register" value="Registrati"/>
						<br/>
                </form>
				
<!-- Qua inizia la parte relativa alla REGISTRAZIONE dell'utente sul database -->
				<?php
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
						/* Se l'array non è vuoto (c'è almeno un campo lasciato vuoto) allora viene stampato
						   un messaggio di errore */
						if (!empty($errori))
						{
							echo ("Devi riempire tutti i campi! <br/>");
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
							$password = sha1($_POST['password']);
							$mail = $_POST['mail'];
							/* Utilizziamo questo semplice contatore per sapere se ci sono corrispondenze tra
							   la mail e l'username inserite nel form che devono essere uniche per ogni utente */
							$count = 0;
							
							/* Creiamo una query per estrapolare tutti gli utenti presenti nel database.
							   Ci sarà utile per confrontare i dati immessi con quelli esistenti. */
							$queryuser = "SELECT username, mail from orunesos.user
										  WHERE username = '{$username} AND mail = '{$mail}'";
							$result = mysql_query($queryuser, $mysqli);
							
							if ($result)
							{
								echo ("L'utente esiste già. <br/>
									   Ti preghiamo di inserire una mail e/o un username diversi");
							}
							else
							{
								$queryins = "INSERT INTO orunesos.user VALUES 
									('$username', '$nome', '$cognome', '$mail', '$password')";
								$inserisci = mysql_query($queryins, $mysqli);
								echo "La registrazione è avvenuta con successo! <br/>
									  Ti diamo il benvenuto nel nostro portale. <br/>
									  Ora potrai usufruire di tutti i servizi. <br/>";
							}
						}
					}
				?>
<!-- Qua finisce la parte relativa alla REGISTRAZIONE -->
				
				
			</div>
		</body>
		
		<?php
			require("view/footer.php");
		?>
</html>
<?php
	// Ciudiamo il database quando viene chiusa la pagina, invocando la funzione nella pagina closeconn.php
	include("closeconn.php");
?>