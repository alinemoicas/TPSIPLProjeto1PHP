<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

<?php
include "ligaBD.php";
$query = "SELECT * FROM user";

$resultado = mysqli_query($liga,$query);
if(mysqli_num_rows($resultado)<=0){
	die("Sem resultados na base de dados");
}
?>

	<table class="table table-striped table-hover">
		<thead>
			<th>ID</th>
			<th>Nome</th>
			<th>Apelido</th>
			<th>Email</th>
			<th>Password</th>
			<th>Morada</th>
			<th>Morada 2</th>
			<th>Código Postal</th>
			<th>Distrito</th>
			<th>Data de Inicio</th>
			<th>Data de Fim</th>
			<th>Ações</th>
		</thead>
		<?php
			while ($row = mysqli_fetch_assoc($resultado)) {    
		?>
			<tr>
				<td><?php  echo $row['id'];  ?></td>
				<td><?php  echo $row['nome'];  ?></td>
				<td><?php  echo $row['apelido'];  ?></td>
				<td><?php  echo $row['email'];  ?></td>
				<td><?php  echo $row['password'];  ?></td>
				<td><?php  echo $row['morada'];  ?></td>
				<td><?php  echo $row['morada2'];  ?></td>
				<td><?php  echo $row['codpostal'];  ?></td>
				<td><?php  echo $row['distrito'];  ?></td>
				<td><?php  echo $row['datai'];  ?></td>
				<td><?php  echo $row['dataf'];  ?></td>
				<td><a href="editaDadosUser.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil fa-fw"></i></a>&nbsp;<a href="eliminaUser.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash-o fa-fw"></i></a></td>
			</tr>
		<?php	
			}
			mysqli_close($liga);
		?>

	</table>



