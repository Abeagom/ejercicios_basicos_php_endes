<?php
$distancia = $_GET['distancia'];
$velocidad = $_GET['velocidad'];
echo "<br>Distancia: $distancia km y la velocidad: $velocidad km/h";
$tiempo = $distancia / $velocidad;
echo "<h2 style='color:blue;'>La estimación es de tiempo es $tiempo horas </h2>";

?><br>
<a href="index.php">Atras</a>