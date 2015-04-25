<!DOCTYPE html>
<?php
	require_once('sessioni.php');
	include('openconn.php');
	require_once('testlogin.php');
	ConfermaLogin();
?>
<html>
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
		<body>
		<?php
			require("view/header.php");
		?>
			<div id = "sidebar1">
				<a href="Home.php"> Home </a>
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
				<a class ="corrente" href="<?php $tipo = "Utenti.php";
									if ($_SESSION['COD'] == "VENDITORE")
									{
										$tipo = "Venditori.php";
									}
									echo $tipo;
									  ?>"> Area Personale </a>
			</div>
			<div id = "content">
				<h2>Prova</h2>
				Ciao <?php echo $_SESSION['username'];?>!<br/>
				Questa è la pagina degli utenti!
				<br/>
			</div>
		</body>
		<?php
			require("view/footer.php");
		?>
</html>
<?php
	include("closeconn.php");
?>