<!DOCTYPE html>
<?php
	require_once('sessioni.php');
	include('openconn.php');
	require_once('testlogin.php');
	ConfermaLogin();
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
				<a href="AreaPersonale.php"> Area Personale </a>
				<br/>
				<a class ="corrente" href="Prova.php"> Prova </a>
			</div>
			<div id = "content">
				<h2>Prova</h2>
				Ciao <?php echo $_SESSION['username'];?>!<br/>
				Questa è la pagina dello staff!
				<br/><br/>
				Effettua il logout <br/>
				<a href="logout.php"><b> Logout </b></a>
				<?php
					
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