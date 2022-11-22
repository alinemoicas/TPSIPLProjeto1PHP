<?php
include 'ligaBD.php';
$id = $_GET['id'];
$query = "SELECT * FROM user WHERE id=$id";
$resultado = mysqli_query($liga, $query);
if(mysqli_num_rows($resultado)==0){
    echo "<script>alert('Erro ao tentar remover registo');</script>";
    echo "<script>window.location.href='mostraUtilizadoresBD.php';</script>";
}else{
    while($row = mysqli_fetch_assoc($resultado)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <header></header>
    <main style="width: 60%; margin-left: 20%;">
        <h1>Registo de  Utilizador</h1>
        <form method="post" action="atualizaUtilizadorBD.php?id=<?php echo $id;?>">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="nome">Nome</label>
                  <input type="text" class="form-control" placeholder="Insira o seu nome" aria-label="Primeiro Nome" id="nome" name="nome" value="<?php echo $row['nome'];?>">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="apelido">Apelido</label>
                  <input type="text" class="form-control" placeholder="Insira o seu apelido" aria-label="Apelido" id="apelido" name="apelido" value="<?php echo $row['apelido'];?>">
                </div>
              </div><br>
              <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Insira o seu email" aria-label="Email" id="email" name="email" value="<?php echo $row['email'];?>">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="password">Password</label>
                      <input type="password" class="form-control" placeholder="Insira a sua password" aria-label="Password" id="password" name="password">
                    </div>
              </div><br>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-24">
                    <label for="text">Morada</label>
                <input type="text" class="form-control" placeholder="Insira a sua morada" aria-label="Morada" id="morada" name="morada" value="<?php echo $row['morada'];?>">
                </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-24">
                        <label for="text">Morada 2</label>
                    <input type="text" class="form-control" placeholder="Apartamento, hotel, casa, etc." aria-label="Morada2" id="morada2" name="morada2" value="<?php echo $row['morada2'];?>">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <label for="cidadeUser">Cidade</label>
                    <input type="text" class="form-control" placeholder="Insira o nome da sua cidade" aria-label="Cidade" id="cidadeUser" name="cidadeUser">
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <label for="distritoUser">Distrito</label>
                        <select id="distritoUser" name="distritoUser" class="form-select">
                            <option SELECTED value="<?php echo $row['distrito'];?>"><?php echo $row['distrito'];?></option>
                            <option>Escolher</option>
                                <option value='Aveiro'>Aveiro</option>
                                <option value='Beja'>Beja</option>
                                <option value='Braga'>Braga</option>
                                <option value='Bragança'>Bragança</option>
                                <option value='Castelo Branco'>Castelo Branco</option>
                                <option value='Coimbra'>Coimbra</option>
                                <option value='Évora'>Évora</option>
                                <option value='Faro'>Faro</option>
                                <option value='Guarda'>Guarda</option>
                                <option value='Leiria'>Leiria</option>
                                <option value='Lisboa'>Lisboa</option>
                                <option value='Portalegre'>Portalegre</option>
                                <option value='Porto'>Porto</option>
                                <option value='Santarém'>Santarém</option>
                                <option value='Setúbal'>Setúbal</option>
                                <option value='Viana do Castelo'>Viana do Castelo</option>
                                <option value='Vila Real'>Vila Real</option>
                                <option value='Viseu'>Viseu</option>

                        </select>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <label for="codPost">Código Postal</label>
                    <input type="text" class="form-control" placeholder="xxxx-yyy" aria-label="Codigo Postal" id="codPost" name="codPost" value="<?php echo $row['codPost'];?>">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="date">Data Inicio:</label>
                    <input type="date" class="form-control" placeholder="dd-mm-aa" aria-label="Data Inicio" id="dataI" name="dataI" value="<?php echo $row['dataI'];?>">
                    </div>
                    <div class="col-lg-4 ">
                        <label for="date">Data Final:</label>
                    <input type="date" class="form-control" placeholder="dd-mm-aa" aria-label="Data Final" id="dataF" name="dataF" value="<?php echo $row['dataF'];?>">
                    </div>
                </div><br>
                
                <div class="row">
                    <div class="col">
                    <input type="checkbox" value="ok" name="check"> &nbsp;Clique em mim
                </div>
            </div><br>

            <div class="row">
                <div class="col">
                <input type="submit" value="Insira Registo" class="btn btn-primary">
            </div>
        </div><br>
        </form>
        <?php
    }
}
mysqli_close($liga);
?>
    </main>
    <footer></footer>
</body>
</html>