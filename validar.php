<?php

session_start();

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$_SESSION['usuario'] = $usuario;

//Conectar a la BD
$conexion=mysqli_connect("localhost", "root", "", "curso");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
	header("location:curso.php");
}
else{
	header("location:login.php");
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>