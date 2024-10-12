<?php
$numero = $_GET['numero'];
$resultado;
if ($numero>=1 && $numero<=10){
    for ($i=1; $i<=10; $i++){
        $resultado = $numero*$i;
        echo "$numero x $i = $resultado<br>";
    }
}else{
    echo "<h2>No válido</h2>";
}
?><br>
<a href="index.php">Atras</a>