<?php
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "localhost" || $REMOTE_ADDR == "127.0.0.1" || $REMOTE_ADDR=="::1" ) {
 
	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "vincent"; 
} else {
$servername = "localhost"; 
$username = "u481158665_vincent"; 
$dbname = "u481158665_vincent";  
$password = "v3p9r3e@59A";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `datas` LIMIT 5';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
		?>
<div class="select_list" onclick="click_selection(this)" id="<?php echo $row["id_datas"] ?>" >
	<?php 
echo $row["nom_datas"];
?>

</div> 
<br/>
     
<?php 
	
	
	}
} else {
  echo "0 results";
}
$conn->close();

echo 21/7;
?>
<div class="pages">




<?php 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT COUNT(`id_datas`) FROM `datas` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	 
		$count_id_datas= $row['COUNT(`id_datas`)'] ; ;
  }
} else {
 
}
$conn->close();


?>




<?php 

$result=  $count_id_datas/7+1;


 


for($i = 0 ; $i<$result;$i++){
 
	if($i!=0){
		echo '<div>'.$i.'</div>';
	}

}
?>


 

</div>