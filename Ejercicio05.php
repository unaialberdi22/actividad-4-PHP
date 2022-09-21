/Ejercicio 05: Guarda en un array 10 numeros aleatorios entre 0 y 99 y sacar la minima.<br><br>

<!DOCTYPE html>
<html>
<body>
<?php
$numeros = array();
for($i=0; $i<10; $i++){
    array_push($numeros, rand(0,99));
}

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i]."  ";
}
echo "<br><br>";
echo min($numeros);
?>
</body>
</html>