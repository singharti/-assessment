<?php 
$subject = $_POST["subject"];
$price = $_POST["price"];
$servername = 'localhost';
$username ='root';
$password ='';
try{
  $con = new PDO("mysql:host=$servername;dbname=test",$username,$password);
  $sql = "INSERT INTO user (subject ,price) VALUES ('$subject','$price')";
  $con -> exec($sql);
  echo "data saved succesfully";
 }
 catch(PDOException $e){
 	echo "server connection faild";

 }
 $con = null;
 ?>