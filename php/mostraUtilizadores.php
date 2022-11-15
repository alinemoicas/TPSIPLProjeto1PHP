<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <title>Mostra Utilizadores</title>
</head>
<body>
    <table class="table table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Email</th>
            <th>Password</th>
            <th>Morada</th>
            <th>Morada 2</th>
            <th>Código Postal</th>
            <th>Distrito</th>
            <th>Data de Início</th>
            <th>Data de Fim</th>
        </thead>
        <?php
            $file = fopen("../datafile/user.txt", "r");
            while (!feof($file)){
                
        ?>
            <tr>
                <td><?php echo fgets($file, 4096);?></td>
                <td><?php echo fgets($file, 4096);?></td>
                <td><?php echo fgets($file, 4096);?></td>
                <td><?php echo fgets($file, 4096);?></td>
                <td><?php echo fgets($file, 4096);?></td>
                <td><?php echo fgets($file, 4096);?></td>
                <td><?php echo fgets($file, 4096);?></td>
                <td><?php echo fgets($file, 4096);?></td>
                <td><?php echo fgets($file, 4096);?></td>
                <td><?php echo fgets($file, 4096);?></td>
            </tr>
        <?php
        //ficar com os cardinais e limpa o teclado
                $nada = fgets($file,4096);
            }
            fclose($file);
        ?>
    </table>

</body>
</html>
