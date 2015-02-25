<!DOCTYPE html>
<?php
	session_start();
	include("openconn.php");
?>
<html>
	<?php
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
				<a class ="corrente" href="regeffet.php"> Area Personale </a>
				<br/>
				<a href="Prova.php"> Prova </a>
			</div>
			<div id = "content">
				<h2>Prova</h2>
				<?php	
					if (isset($_POST['username']))
					{
						$nome = $_POST['nome'];
						$cognome = $_POST['cognome'];
						$username = $_POST['username'];
						$password = $_POST['password'];
						$mail = $_POST['mail'];
						$count = 0;
						
						$queryuser = "SELECT username, password, mail, nome, cognome from orunesos.user";
						$result = $mysqli->query($queryuser);
						
						while($row = $result->fetch_row())
						{
								if (($row[0] == $username) || ($row[2] == $mail))
								{
									$count++;
								}
						}
						if ($count == 0)
						{
							$queryins = "INSERT INTO orunesos.user VALUES 
								('$username', '$nome', '$cognome', '$mail', '$password')";
							$inserisci=$mysqli->query($queryins);
							echo "La registrazione è avvenuta con successo! <br/>
								  Ti diamo il benvenuto nel nostro portale. <br/>
								  Ora potrai usufruire di tutti i servizi. <br/>";
						} else
						{
							echo ("L'utente esiste già. <br/>
							       Ti preghiamo di inserire una mail e/o un username diversi");
						}
					}
				?>
			</div>
		</body>
		<?php
			require("view/footer.php");
		?>
</html>
<?php
	include("closeconn.php");
?>