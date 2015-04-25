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
				<a href="Home.php"> Home </a>
				<br/>
				<a href="Orune.php"> Orune </a>
				<br/>
				<a href="Storia.php"> Storia </a>
				<br/>
				<a class ="corrente" href="Archeologia.php"> Archeologia </a>
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
				<h2> Archeologia </h2>
				<p> La chiesa parrocchiale è dedicata a Santa Maria della Neve; delle altre chiese, soltanto quella dedicata a Santa Caterina, nella parte più antica del paese, e quella della Consolata, a qualche chilometro dal centro abitato, sono aperte al culto.
					In prossimità del paese sono presenti importanti siti di epoca nuragica (tra i quali la meravigliosa fonte sacra nota come 
					<a href = "http://it.wikipedia.org/wiki/Fonte_sacra_Su_Tempiesu" target = "_blank"> Su Tempiesu </a>, in località Sa costa 'e sa binza) e di epoca romana imperiale (tra cui il "Vicus", in località Sant'Efis, dove sono stati rinvenuti monete, utensili ed un preziosissimo calice di vetro lavorato, raffigurante gli Apostoli e Gesù che consegna il rotolo delle leggi a San Paolo).
					<table>
						<tr>
							<th> Sito Archeologico </th>
							<th> Tipo </th>
						</tr>
						<tr>
							<td> Su Tempiesu </td>
							<td> Fonte Nuragica Sacra </td>
						</tr>
						<tr>
							<td> Nunnale </td>
							<td> Nuraghe e Roccia </td>
						</tr>
						<tr>
							<td> Sant Efis </td>
							<td> Insediamento Romano </td>
						</tr>
					</table>
				</p>
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