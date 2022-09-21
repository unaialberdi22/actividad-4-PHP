/Ejercicio 01: Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:<br>
nombre, apellido y DNI.<br>
Hay que meter todos los datos en dos arrays ($usuario1, $usuario2) y después visualizarlos por pantalla en formato tabla.
<br><br>

<!DOCTYPE html>
<html>
<body>
<?php
$nombre1 = "Unai";
$apellido1 = "Alberdi";
$DNI1 = "44334919G";

$nombre2 = "Jon";
$apellido2 = "Corta";
$DNI2 = "91823532T";

$dato1 = array($nombre1,$apellido1,$DNI1);
$dato2 = array($nombre2,$apellido2,$DNI2);

for ($i = 0; $i < count($dato1); $i++) {
    echo $dato1[$i]."  ";
}

echo "<br>";

for ($i = 0; $i < count($dato2); $i++) {
    echo $dato2[$i]."  ";
}
?>
</body>
</html>