<!DOCTYPE html>
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
				<a class ="corrente" href="Archeologia.php"> Archeologia </a>
				<br/>
				<a href="ProdottiTipici.php"> Prodotti tipici </a>
				<br/>
				<a href="AreaPersonale.php"> Area Personale </a>
				<br/>
				<a href="Prova.php"> Prova </a>
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