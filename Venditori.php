<!DOCTYPE html>
<?php
	require_once('sessioni.php');
	include('openconn.php');
	require_once('testlogin.php');
	ConfermaLogin();
?>
<html>
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
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
				Questa è la pagina dei venditori!
				<br/><br/>
				Effettua il logout <br/>
				<a href="logout.php"><b> Logout </b></a>
				<?php
					if (isset($_SESSION['username']))
					{
						$username = $_SESSION['username'];
						$queryuser = "SELECT codP, tipoP, nomeP, propr, prezzo, quant FROM user JOIN prodotti
									  WHERE propr = '{$username}'";
						$result = mysql_query($queryuser, $mysqli);
						if (mysql_num_rows($result) > 0)
						{
							$numrighe = mysql_num_rows($result)/6;
							$i = 0;
							while($i < $numrighe)
							{
								$row = mysql_fetch_assoc($result);
								echo "<br> codP: ". $row["codP"]. "<br> tipoP: ". $row["tipoP"]. "<br> nomeP: ". $row["nomeP"]. 
								"<br> Proprietario: ". $row["propr"]. "<br> Prezzo: ". $row["prezzo"]. "<br> Quantità: ". $row["quant"];
								echo "<br>";
								$i++;
							}
						} else {
							echo "Nessun elemento presente.";
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