<?php
$numero = $_GET['numero'];
switch ($numero) {
    case 1:
        echo "<h3>Lunes</h3>";
        break;
    case 2:
        echo "<h3>Martes</h3>";
        break;
    case 3:
        echo "<h3>Miércoles</h3>";
        break;
    case 4:
        echo "<h3>Jueves</h3>";
        break;
    case 5:
         echo "<h3>Viernes</h3>";
        break;
    case 6:
        echo "<h3>Sábado</h3>";
        break;
    case 7:
        echo "<h3>Domingo</h3>";
        break;
    default:
        echo "<h3>No es un número válido</h3>";
    }      
?><br>
<a href="index.php">Atras</a>