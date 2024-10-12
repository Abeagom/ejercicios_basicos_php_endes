<?php
$numero = $_GET['numero'];
$suma = 0;
for ($i=1; $i<=$numero; $i++){
    $suma+=$i;
}
echo "<h2> Suma total: $suma</h2>";
?><br>
<a href="index.php">Atras</a>