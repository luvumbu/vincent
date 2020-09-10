<?php 
session_start() ; 
header("Access-Control-Allow-Origin: *");
echo "Connected successfully";
$_SESSION["usermail"] = "jpp@asporquet.fr";
$_SESSION["userpassword"]= "c03m06l17";
?>