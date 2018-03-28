<?php

	$rezultat = str_replace("a","4","Ja sam programer");
	echo "<br>".$rezultat;

	$drugaRec = str_replace(["a", "e"], ["4","3"], "Ja sam programer");
	echo "<br>".$drugaRec;

	$malaSlova = "OVO BI TREBALO DA BUDE MALIM SLOVIMA";
	$malaSlova = strtolower ($malaSlova);
	echo "<br>".$malaSlova;


	//strtoupper - mala za velika slova

	$promena = str_replace(["a", "e", "i", "o"], ["4", "3", "1", "0"], "Ideja nije moja, smislili su je neki kreativni nastavnici");
	echo "<br>".$promena;
	$promena = strtoupper($promena);
	echo "<br>".$promena;


?>