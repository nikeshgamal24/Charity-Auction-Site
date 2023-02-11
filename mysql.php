<?php
$server='localhost';
$username='root';
$pass='';


//Connecting to the server
$conn=mysqli_connect($server,$username,$pass);

if(!$conn){
  die("Connection failed");
}

//Creating database if not exists
$sql="CREATE DATABASE IF NOT EXISTS  auctionInfo";

$result=mysqli_query($conn,$sql);
if(!$result){
    die("Database creation failed");
}

//Connecting to the database
 //mysqli_select_db() function select which database to connect with
mysqli_select_db($conn,'auctionInfo');

//Creating table if not exists
$st="CREATE TABLE IF NOT EXISTS auction_table(
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
phone VARCHAR(30) NOT NULL,
country VARCHAR(30) NOT NULL
)";

$resultT=mysqli_query($conn,$st);
if(!$resultT){
    die("Table created failed");
}

?>