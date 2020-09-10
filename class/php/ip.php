<?php
$localisation = ""; // initiallisation de la variable
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "localhost" || $REMOTE_ADDR == "127.0.0.1" || $REMOTE_ADDR=="::1" ) {
	include("class/php/bdd_local.php"); // ajout des fichier local
	$localisation = "localhost"; // atribution delement variable
	
	$_SESSION["REMOTE_ADDR"] = $localisation;
	$_SESSION["country"] = "country_local";
	$_SESSION["city"] = "city_local";
} else {
		include("class/php/bdd_prod.php"); // ajout des fichier prod

}
$_SESSION["localisation"] = $localisation;
