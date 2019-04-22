<?php
$n = $_POST ["ninos"];
$a = $_POST ["adultos"];

if ($_POST ["entrada"] !=""){
//entrada general

        //Lunes
		if ($_POST["entrada"] == "1" and $_POST["dia"] == "1") {
            echo "<br><br><br>";
            echo "Tipo de entrada: " , "Entrada General" ,"<br>";
            echo "Día de su visita: " , "Lunes (50% descuento)" ,"<br>";
            echo "Cantidad de niños: " , $n ,"<br>";
            echo "Cantidad de adultos: " , $a ,"<br>";
            echo "Total a pagar: $";
			print ($res = $n * "10" + 
                $a * "15");    
		} 
        //Martes
        elseif ($_POST["entrada"] == "1" and $_POST["dia"] == "2") {
            echo "<br><br><br>";
            echo "Tipo de entrada: " , "Entrada General" ,"<br>";
            echo "Día de su visita: " , "Martes (50% descuento)" ,"<br>";
            echo "Cantidad de niños: " , $n ,"<br>";
            echo "Cantidad de adultos: " , $a ,"<br>";
            echo "Total a pagar: $";
            print ($res = $n * "10" + 
                $a * "15"); 
        }
        //Miercoles
        elseif ($_POST["entrada"] == "1" and $_POST["dia"] == "3") {
            echo "<br><br><br>";
            echo "Tipo de entrada: " , "Entrada General" ,"<br>";
            echo "Día de su visita: " , "Miércoles (50% descuento)" ,"<br>";
            echo "Cantidad de niños: " , $n ,"<br>";
            echo "Cantidad de adultos: " , $a ,"<br>";
            echo "Total a pagar: $";
            print ($res = $n * "10" + 
                $a * "15");
        }
        //Jueves
        elseif ($_POST["entrada"] == "1" and $_POST["dia"] == "4") {
            echo "<br><br><br>";
            echo "Tipo de entrada: " , "Entrada General" ,"<br>";
            echo "Día de su visita: " , "Jueves (35% descuento)" ,"<br>";
            echo "Cantidad de niños: " , $n ,"<br>";
            echo "Cantidad de adultos: " , $a ,"<br>";
            echo "Total a pagar: $";
            print ($res = $n * "13" + 
                $a * "19.5");
        }
        //Viernes
        elseif ($_POST["entrada"] == "1" and $_POST["dia"] == "5") {
            echo "<br><br><br>";
            echo "Tipo de entrada: " , "Entrada General" ,"<br>";
            echo "Día de su visita: " , "Viernes (35% descuento)" ,"<br>";
            echo "Cantidad de niños: " , $n ,"<br>";
            echo "Cantidad de adultos: " , $a ,"<br>";
            echo "Total a pagar: $";
            print ($res = $n * "13" + 
                $a * "19.5");
        }
//paquetes  
        elseif ($_POST["entrada"] == "2") {
            echo "<br><br><br>";
            echo "Tipo de entrada: " , "Paquete Silver" ,"<br>";
            echo "Cantidad de niños: " , $n ,"<br>";
            echo "Cantidad de adultos: " , $a ,"<br>";
            echo "Total a pagar: $";
			print ($res = $n * "55" + 
                $a * "65");
		} 
        elseif ($_POST["entrada"] == "3") {
            echo "<br><br><br>";
            echo "Tipo de entrada: " , "Paquete Premier" ,"<br>";
            echo "Cantidad de niños: " , $n ,"<br>";
            echo "Cantidad de adultos: " , $a ,"<br>";
            echo "Total a pagar: $";
            print ($res = $n * "80" + 
                $a * "95");
        } 
	} 
?>
<br><br>
<button onclick="location.href='calcular.html'">Volver</button>
<link rel="stylesheet" type="text/css" href="css/estilocalc2.css">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zoológico de Morelia</title>
    <link rel="stylesheet" href="css/estilomenu.css">

    <body>
        <header class="header">
            <div class="container logo-nav-container">
                <a href="index.html"><img src="imagenes/zoo.png" class="logo"></a>
                <span class="menu-icon"> <img class="icono" src="imagenes/bot.png"></span>
                <nav class="navigation">

                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="escuelas.html">Grupos escolares</a></li>
                    <li><a href="cursos.html">Cursos de verano</a></li>
                    <li><a href="calcular.html">Costos y descuentos</a></li>
                    <li><a href="calendario.html">Agenda escolar</a></li>
                    <li><a href="contacto.html">Contáctanos</a></li>
                </ul>
            </nav>
            </div>
        </header>
        <main class="main">
            <div class="container">

            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <p>Calz. Juárez, S/N Col. Félix Ireta,<br>
                   58070, Morelia, Michoacán.<br>
                   01 (443) 299 3610 y 299 3616<br>
                   zoomoreliaoficial@gmail.com<br>
                   www.zoomorelia.michoacan.gob.mx
                </p>
            </div>
        </footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/menu.js"></script>

    </body>
</head>
</html>