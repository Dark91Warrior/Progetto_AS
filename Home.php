<!DOCTYPE html>
<html>
	<head>
		<title>Orunesos in su Munnu</title>
		<meta charset="utf-8"/>
		<meta name="keywords" content="HTML, CSS, PHP, MySQL, AMM">			 <!-- Nome  -->
		<meta name="description" content="Sito per gli orunesi nel mondo">	 <!-- Descrizione del sito -->
		<meta name="author" content="Luca Puggioninu">					  	 <!-- Nome autore -->
		<meta http-equiv="refresh" content="30">              		   	  	 <!-- Aggiorna la pagina ogni 30 secondi -->
		<style type="text/css"></style>										 <!-- Stile della pagina che si trova nel documento CSS -->
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<script type="text/javascript"></script>
	</head>

		<div id = "header">
				<h1> Orunesos in su Munnu </h1>
				<hr/>
				<p> Un sito che raggruppa gli abitanti di Orune sparsi nel mondo </p>
		</div>
		<body>
			<div id = "sidebar1">
				<a class ="corrente" href="Home.php"> Home </a>
				<br/>
				<a href="Orune.html"> Orune </a>
				<br/>
				<a href="Storia.html"> Storia </a>
				<br/>
				<a href="Archeologia.html"> Archeologia </a>
				<br/>
				<a href="ProdottiTipici.html"> Prodotti tipici </a>
				<br/>
				<a href="AreaPersonale.html"> Area Personale </a>
			</div>
			<div id = "content">
				<h2> Home </h2>
				<?php
					$links = array("www.oruneonline.it", "www.oruneday.it");
					echo "<b>Siti amici:</b><ul>";
					foreach($links as $link)
					{
						echo "<li><a href=\"http://$link\">$link</a></li>";
					}
					echo "</ul>";
					
					$a = 8;
					echo nl2br("\nLa variabile vale $a\n");
					$a += 2;
					echo nl2br("\nAggiungo 2. La variabile vale $a\n");
					$a -= 4;
					echo nl2br("\nSottraggo 4. La variabile vale $a\n");
					$a *= 5;
					echo nl2br("\nMoltiplico per 5. La variabile vale $a\n");
					$a /= 3;
					echo nl2br("\nDivido per 3. La variabile vale $a\n");
					$a--;
					echo nl2br("\nDecremento a di 1. La variabile vale $a\n");
					$a++;
					echo nl2br("\nIncremento a di 1. La variabile vale $a\n");
				?>
			</div>
		</body>
</html>
<footer>
			<p> Autore: Luca Puggioninu </p>
</footer>