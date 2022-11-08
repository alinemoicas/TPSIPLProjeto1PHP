<?php
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

//escrever dados em ficheiro de texto
//criar ficheiro
$path = "../datafile/registo.txt";
$file = fopen($path,"a+");
if(file_exists("$path")){
    $dados = "Nome: $nome $apelido\nEmail: $email\nPassword:$pass\nMorada:$morada, &morada2 - $cidade\nCódigo Postal:codPost, &cidade, $distrito\nData Início: $datai\nData Fim: dataf\n##########################\n";
    fwrite($file, $dados);

}else{
    echo "<script>alert('Erro ao tentar abrir o ficheiro');</script>";
}
fclose($file);

?>