<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$numero3 = $_GET['numero3'];
$elmayor;
if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    $elmayor = $numero1;
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    $elmayor = $numero2;
} else {
    $elmayor = $numero3;
}
echo "<h2 style='color:blue;'>El mayor es $elmayor</h2>";

?><br>
<a href="index.php">Atras</a>