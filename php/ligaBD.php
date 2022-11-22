<?php
$servername = "localhost";
$user = "root";
$pass = "";
$bd = "stand";

$liga = mysqli_connect($servername,$user,$pass,$bd);
if(!$liga){
	die("Erro ao tentar aceder a base de dados".mysqli_connect_error());
}


?>