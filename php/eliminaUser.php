<?php
include 'ligaBD.php';

$id = $_GET['id'];

$query = "DELETE FROM user WHERE id=$id";
if(mysqli_query($liga,$query)){
    echo "<script>alert('Registo removido com sucesso!');</script>";
    echo "<script>window.location.href='mostraUtilizadoresBD.php';</script>";
}else{
    echo "<script>alert('Erro ao tentar remover registo');</script>";
    echo "<script>window.location.href='mostraUtilizadoresBD.php';</script>";
}
mysqli_close($liga);
?>