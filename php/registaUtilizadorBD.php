<?php
include "ligaBD.php";
//obter dados do formulário
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$pass = $_POST['password'];
$morada = $_POST['morada'];
$morada2 = $_POST['morada2'];
$cidade = $_POST['cidadeUser'];
$distrito = $_POST['distritoUser'];
$codPost = $_POST['codPost'];
$datai = $_POST['dataI'];
$dataf = $_POST['dataF'];
$check = $_POST['check'];

$query = "INSERT INTO user(nome, apelido, email, password, morada, morada2, codpostal, distrito, datai, dataf) VALUES('$nome','$apelido','$email','$pass','$morada','$morada2','$codPost','$distrito','$datai','$dataf')";
if(mysqli_query($liga,$query)){
	echo "<p>Dados inseridos com Sucesso!</p>";
}else{
	echo "<p>Erro ao tentar registar dados na BD. ".mysqli_error($liga)."</p>";
}
mysqli_close($liga);
?>