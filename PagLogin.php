<!DOCTYPE html>
<?php
	require_once('sessioni.php');
	require_once('testlogin.php');
	// Includiamo le funzioni utili per utilizzare il database del sito
	include("openconn.php");
?>
<html>
	<script src="jquery/jquery.min.js" type="text/javascript"></script>
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
				<a class ="corrente" href="PagLogin.php"> Login </a>
				<br/>
				<a style="<?php $visibilita = "visibility:hidden";
									if (!empty($_SESSION['username']))
									{
										$visibilita = "visibility:visible";
									}
									echo $visibilita;
							?>" href="<?php $tipo = "Utenti.php";
									if ($_SESSION['COD'] == "VENDITORE")
									{
										$tipo = "Venditori.php";
									}
									echo $tipo;
									  ?>"> Area Personale </a>
			</div>
			<div id = "content">
				<h2> Login </h2>
				<!-- A differenza del GET, il POST non invia i dati nella barra degli indirizzi. -->
				<!-- Codice per il form...il campo action rappresenta la pagina a cui si verrà reindirizzati una volta premuto il pulsante.-->
				<form method="post" action="PagLogin.php">
						<label for="username">Username</label>
						<input type="text" name="username" id="username"/> 
						<br/>
						<label for="password">Password</label>
						<input type="password" name="password" id="password"/>
						<br/>
						<input type="submit" name="login" id="login" value="Login"/>
						<br/>
                </form>
				<!-- Codice relativo al login e al passaggio alle aree riservate. -->

				
				
				
<!-- Codice per il form...il campo action rappresenta la pagina a cui si verrà reindirizzati una volta premuto il pulsante.-->				
				<h2> Non sei ancora un nostro utente? Registrati! </h2>
				<form method="post" action="PagLogin.php">
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
						<label for="email">Tipo</label>
						<input type="radio" name="COD" value="UTENTE"> Utente
						<input type="radio" name="COD" value="VENDITORE"> Venditore <br>
						<input type="submit" name="register" id="register" value="Registrati"/>
						<br/>
				</form>
				<?php
					include("login.php");
				?>
				
				<?php
					include("registrazione.php");
				?>
				<script type = "text/javascript">
					$(function()
					{
						$('#register').click(function()
						{
							$('#content').append('<img src="loader.gif" alt="loader" id="loader"/>');
							
							var username = $('#username').val();
							var nome = $('#nome').val();
							var cognome = $('#cognome').val();
							var mail = $('#mail').val();
							var password = $('#password').val();
							var COD = $('#COD').val();
							
							$.ajax({
								url: 'registrazione.php',
								type: 'POST',
								data: '&username=' + username + '&nome=' + nome + '&cognome=' + cognome + '&mail=' + mail + '&password=' + password + '&COD=' + COD,
								success: function(res) {
									$('#risposta').remove();
									$('#content').append('<p id="risposta">' + res + '</p>');
									$('#loader').fadeOut(800, function() {
										$(this).remove();
									});
								}
							});
						});
					});
				</script>
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