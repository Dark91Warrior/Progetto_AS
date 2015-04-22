<!DOCTYPE html>
<?php
	require_once('sessioni.php');
	require_once('testlogin.php');
	// Includiamo le funzioni utili per utilizzare il database del sito
	include("openconn.php");
?>
<html>
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<?php
		require("view/header.php");
		$visibilita = "visibility:hidden";
		if (isset($_SESSION))
		{
			$visibilita = "hidden";
		}
	?>
	<body>
			<div id = "sidebar1">
				<a class ="corrente" href="Home.php"> Home </a>
				<br/>
				<a href="Orune.php"> Orune </a>
				<br/>
				<a href="Storia.php"> Storia </a>
				<br/>
				<a href="Archeologia.php"> Archeologia </a>
				<br/>
				<a href="ProdottiTipici.php"> Prodotti tipici </a>
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