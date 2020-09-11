<div v-bind:class="liste_produit_nom">
<?php


	$servername = $_SESSION["servername"];
	$username =	$_SESSION["username"];
	$password = $_SESSION["password"];
	$dbname = $_SESSION["dbname"]; 

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

echo $row["nom_datas"]; 
?>

 <?php 

  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>