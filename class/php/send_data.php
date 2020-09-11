<?php 
session_start(); 
header("Access-Control-Allow-Origin: *");



 
$fino = "1";
 
	$servername = $_SESSION["servername"];
	$username =	$_SESSION["username"];
	$password = $_SESSION["password"];
	$dbname = $_SESSION["dbname"]; 


	
echo 	$servername.'-'  ;  
echo 	$username.'-';

echo 	$password.'-'; 
echo 	$dbname.'-';
if(isset($_POST["prix3"])){
 

$fab1 = $_POST["fab1"];
$ref1 = $_POST["ref1"];
$prix1 = $_POST["prix1"];

$fab2 = $_POST["fab2"];
$ref2 = $_POST["ref2"];
$prix2 = $_POST["prix2"];

$fab3 = $_POST["fab3"];
$ref3 = $_POST["ref3"];
$prix3 = $_POST["prix3"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MAX(id_datas) FROM `datas` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  
	 $fino=$row["MAX(id_datas)"];
	 
  }
} else {
  echo "0 results";
}
$conn->close();

	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO datas (id_union_datas ,nom_datas,reference_datas, prix_datas)
	VALUES ('$fab1', '$ref1 ', '$fino','$prix1')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	



	$sql = "INSERT INTO datas (id_union_datas ,nom_datas,reference_datas, prix_datas)
	VALUES ('$fab2', '$ref2 ', '$fino','$prix2')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	


	$sql = "INSERT INTO datas (id_union_datas ,nom_datas,reference_datas, prix_datas)
	VALUES ('$fab3', '$ref3 ', '$fino','$prix3')";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	

	$conn->close();


}
else {
	$fab1 = $_POST["fab1"];
	$ref1 = $_POST["ref1"];
	$prix1 = $_POST["prix1"];
	
	$fab2 = $_POST["fab2"];
	$ref2 = $_POST["ref2"];
	$prix2 = $_POST["prix2"];
	
 
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT MAX(id_datas) FROM `datas` WHERE 1";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			
		 $fino=$row["MAX(id_datas)"];
		 
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "INSERT INTO datas (id_union_datas ,nom_datas,reference_datas, prix_datas)
		VALUES ('$fab1', '$ref1 ', '$fino','$prix1')";
		
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
			
		$sql = "INSERT INTO datas (id_union_datas ,nom_datas,reference_datas, prix_datas)
		VALUES ('$fab2', '$ref2 ', '$fino','$prix2')";
		
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
			
		$conn->close();
	
}
