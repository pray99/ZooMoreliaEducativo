<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
	echo "Usted no tiene autorización";
	die();
}

?>


<?php
	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM clientes ORDER BY id DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM clientes WHERE nombre LIKE :campo OR apellidos LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Zoológico de Morelia</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>Cursos de verano</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="Buscar nombre o apellido" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="insert.php" class="btn btn__nuevo">Nuevo registro</a>
			</form>
		</div>
		<table>
			<tr class="head">
				
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Edad</td>
				<td>Telefono</td>
				<td>Correo</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['apellidos']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
					<td><?php echo $fila['ciudad']; ?></td>
					<td><?php echo $fila['correo']; ?></td>
					<td><center><a href="update.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar</a></center></td>

					<td><center><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn__delete" onclick="return confirm('¿Eliminar registro?');">Eliminar</a></center></td>
				</tr>
			<?php endforeach ?>

		</table>
		<br><br>
		<center><a href="cerrar.php" class="btn__delete">Cerrar Sesión</a></center>
	</div>
</body>
</html>