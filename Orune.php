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
				<a class ="corrente" href="Orune.php"> Orune </a>
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
				<h2> Orune </h2>
				<p> Orune (Or&ugravene' o 'Ur&ugravene in sardo) &egrave un comune italiano di 2.477 abitanti (Dati ISTAT 31/12/2013) della provincia di Nuoro.
								   Situato sulla cima di un monte, a 745 Mt s.l.m.: da qui si domina un vastissimo panorama che va dal mare della Baronia, alla Barbagia, al Logudoro, 
								   alla Gallura. Nel suo vasto territorio (128 km quadrati, dei quali 64 di propriet&agrave del comune ed i restanti di propriet&agrave di privati) vi sono splendidi 
								   boschi di quercia da sughero, leccio e roverella. Dal punto di vista altimetrico, il territorio comunale &egrave compreso tra i 99 metri s.l.m. della valle 
								   di Is&agravelle' ed i 1014 metri s.l.m. di C&ugraveccuru 'e su pir&agravestru. Orune, deriva dal greco "oros" che significa montagna, da cui deriva orografia, cio&egrave la parte della geografia che ha per oggetto la descrizione delle catene dei monti, quanto alle forme, all'altezza e alle genesi.
								   Anche una citt&agrave della Bolivia, chiamata Oruro, che sorge a 3700 m. sull'altipiano, dominato dall'altissimo monte Sajama, alto 6500 m., trae le sue origini dallo stesso vocabolario. La stessa etimologia trae Oropa data la sua alpestre posizione di 1180 m. sul livello del mare.</p>
				
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