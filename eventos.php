<?php

header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=sistema2;host=127.0.0.1","root","");


$accion=(isset($_GET['accion'])) ?$_GET['accion']: 'leer';
switch ($accion) {
	case 'agregar':
		// Instrucción de agregar
		$sentenciaSQL = $pdo->prepare("INSERT INTO
			eventos(title,cantn,canta,titular,telefono,color,textColor,start,end)
			VALUES(:title,:cantn,:canta,:titular,:telefono,:color,:textColor,:start,:end)");

			$respuesta=$sentenciaSQL->execute(array(
				"title" =>$_POST['title'],
				"cantn" =>$_POST['cantn'],
				"canta" =>$_POST['canta'],
				"titular" =>$_POST['titular'],
				"telefono" =>$_POST['telefono'],
				"color" =>$_POST['color'],
				"textColor" =>$_POST['textColor'],
				"start" =>$_POST['start'],
				"end" =>$_POST['end']
			));
			echo json_encode($respuesta);
		break;
	case 'eliminar':
		// Instrucción de eliminar
		$respuesta=false;
		if (isset($_POST['id'])) {
			$sentenciaSQL= $pdo->prepare("DELETE FROM eventos WHERE ID=:ID");
			$respuesta= $sentenciaSQL->execute(array("ID"=>$_POST['id']));
		}
		echo json_encode($respuesta);
		break;
	case 'modificar':
		// Instrucción de modificar
		$sentenciaSQL = $pdo->prepare("UPDATE eventos SET
			title=:title,
			cantn=:cantn,
			canta=:canta,
			titular=:titular,
			telefono=:telefono,
			color=:color,
			textColor=:textColor,
			start=:start,
			end=:end
			WHERE ID=:ID
			");

		$respuesta=$sentenciaSQL->execute(array(
				"ID" =>$_POST['id'],
				"title" =>$_POST['title'],
				"cantn" =>$_POST['cantn'],
				"canta" =>$_POST['canta'],
				"titular" =>$_POST['titular'],
				"telefono" =>$_POST['telefono'],
				"color" =>$_POST['color'],
				"textColor" =>$_POST['textColor'],
				"start" =>$_POST['start'],
				"end" =>$_POST['end']
			));
		echo json_encode($respuesta);
		break;
	default:
		//Seleccionar los eventos del calendario
		$sentenciaSQL= $pdo->prepare("SELECT * FROM eventos");
		$sentenciaSQL->execute();

		$resultado= $sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
		echo json_encode($resultado);

		break;
}


?>