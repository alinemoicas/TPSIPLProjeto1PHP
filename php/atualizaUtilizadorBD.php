<?php
include "ligaBD.php";
$id = $_GET['id'];
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

$query = "UPDATE user SET nome='$nome', apelido='$apelido', email='$email', password='$pass', morada='$morada', morada2='$morada2', codpostal='$codPost', distrito='$distrito', datai='$datai', dataf='$dataf') WHERE id = $id";
if(mysqli_query($liga,$query)){
    echo "<script>alert('Dados atualizados com sucesso!');</script>";
    echo "<script>window.location.href='mostraUtilizadoresBD.php';</script>";
}else{
    echo "<p>Erro ao tentar atualizar dados na BD. ".mysqli_error($liga)."</p>";
    echo "<script>window.location.href='mostraUtilizadoresBD.php';</script>";
}
mysqli_close($liga);
?>