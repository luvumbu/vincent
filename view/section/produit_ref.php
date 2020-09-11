<div v-bind:class="liste_produit_ref">
<?php

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



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `datas` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { 
 echo $row["reference_datas"]; 
		echo "<br/>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>