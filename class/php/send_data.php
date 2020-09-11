<?php 
session_start(); 
header("Access-Control-Allow-Origin: *");


  
$nom1 = $_POST["nom1"];
$ref1 = $_POST["ref1"];
$prix1 = $_POST["prix1"];

$nom2 = $_POST["nom2"];
$ref2 = $_POST["ref2"];
$prix2 = $_POST["prix2"];


$servername =$_SESSION["servername"]   ; 
$username =$_SESSION["username"]  ; 
$password=$_SESSION["password"]  ; 
$dbname =$_SESSION["dbname"] ; 







$MaxId;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT MAX(`id_datas`) FROM `datas` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
 
	$MaxId = $row['MAX(`id_datas`)'] ;

	if(	$MaxId==""){
		$MaxId=1;
	}
  }
} else {
  echo "0 results";
}
$conn->close();
echo	$MaxId ; 
$nom1 = $_POST["nom1"];
$ref1 = $_POST["ref1"];
$prix1 = $_POST["prix1"];
$nom2 = $_POST["nom2"];
$ref2 = $_POST["ref2"];
$prix2 = $_POST["prix2"];




if(isset( $_POST["nom3"]) && isset( $_POST["ref2"]) && isset( $_POST["prix3"]) ){




	$nom3 = $_POST["nom3"];
	$ref3 = $_POST["ref3"];
	$prix3 = $_POST["prix3"];



	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO datas (id_union_datas, nom_datas,reference_datas,prix_datas)
VALUES ('$MaxId ', '$nom1', '$ref1','$prix1')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "INSERT INTO datas (id_union_datas, nom_datas,reference_datas,prix_datas)
VALUES ('$MaxId ', '$nom2', '$ref2','$prix2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "INSERT INTO datas (id_union_datas, nom_datas,reference_datas,prix_datas)
VALUES ('$MaxId ', '$nom3', '$ref3','$prix3')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();









}
else {


 



	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO datas (id_union_datas, nom_datas,reference_datas,prix_datas)
VALUES ('$MaxId ', '$nom1', '$ref1','$prix1')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "INSERT INTO datas (id_union_datas, nom_datas,reference_datas,prix_datas)
VALUES ('$MaxId ', '$nom2', '$ref2','$prix2')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 


	
}
?>





















