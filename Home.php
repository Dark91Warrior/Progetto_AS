<!DOCTYPE html>
<?php
	require_once('sessioni.php');
	require_once('testlogin.php');
	// Includiamo le funzioni utili per utilizzare il database del sito
	include("openconn.php");
?>
<html>
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<body>
	<?php
		require("view/header.php");
	?>
			<div id = "sidebar1">
				<a class ="corrente" href="Home.php"> Home </a>
				<br/>
				<a href="Orune.php"> Orune </a>
				<br/>
				<a href="Storia.php"> Storia </a>
				<br/>
				<a href="Archeologia.php"> Archeologia </a>
				<br/>
				<a style="<?php $visibilita = "visibility:hidden";
									if (empty($_SESSION['username']))
									{
										$visibilita = "visibility:visible";
									}
									echo $visibilita;
							?>" href="PagLogin.php"> Login </a>
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
				<h2>Home</h2>
				<p> Ti diamo il benvenuto nel nostro sito. Puoi accedere a una delle seguenti sezioni: </p>
				<div class="center">
					<button onclick="location.href='Orune.php'">Orune</button><br/><br/>
					<button onclick="location.href='Storia.php'">Storia</button><br/><br/>
					<button onclick="location.href='Archeologia.php'">Archeologia</button><br/><br/>
					<button onclick="location.href='ProdottiTipici.php'">Prodotti Tipici</button><br/><br/>
					<button onclick="<?php $locazione = "location.href='PagLogin.php'";
										if (!empty($_SESSION['username']))
										{
											if ($_SESSION['COD'] == "VENDITORE")
											{
												$locazione = "location.href='Venditori.php'";
											}
											else
											{
												$locazione = "location.href='Utenti.php'";
											}
										}
										echo $locazione;
									?>">
					<?php $sezione = "Login";
									if (!empty($_SESSION['username']))
									{
										$sezione = "Area Personale";
									}
									echo $sezione;
					?></button>
				</div>
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