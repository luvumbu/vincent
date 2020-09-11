<?php
$servername = "localhost"; 
$username = "u481158665_vincent"; 
$dbname = "u481158665_vincent";  
$password = "v3p9r3e@59A";
$dbname = $username;
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];

$_SESSION["servername"] = $servername ; 
$_SESSION["username"] = $username ; 
$_SESSION["password"] = $password ; 
$_SESSION["dbname"] = $dbname  ; 
$localisation = "internet"; // atribution delement variable 
// $_SESSION["country"] = $query['country'];
// $_SESSION["city"] = $query['city'];
$ip = $_SERVER['REMOTE_ADDR']; // Recuperation de l'IP du visiteur
$query = @unserialize(file_get_contents('http://ip-api.com/php/' . $ip)); //connection au serveur de ip-api.com et recuperation des données
if ($query && $query['status'] == 'success') {	//code avec les variables
//	echo "Bonjour visiteur de " . $query['country'] . "," . $query['city'];
	$country=$query['country'];
	$city=$query['city'];
}
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>