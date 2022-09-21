/Ejercicio 08: Tendremos los datos personales de 2 personas en 6 variables. Cada persona tendrá 3 datos:<br>
nombre, apellido y DNI.<br>
Hay que meter todos los datos en un array asociativo donde los índices sean “nombre”, “apellido”, “DNI” y después visualizarlos por pantalla en formato tabla.
<br><br>

<!DOCTYPE html>
<html>
<body>
<?php
$persona1 = array ("Nombre" => "Unai", "Apellido" => "Alberdi", "DNI" => "44334919G");
$persona2 = array ("Nombre" => "Jon", "Apellido" => "Corta", "DNI" => "81239523J");

foreach ($persona1 as $item => $persona1){
    echo "/".$item.": ".$persona1." ";
}
    
echo "<br>";

foreach ($persona2 as $item => $persona2){
    echo "/".$item.": ".$persona2." ";
}

?>
</body>
</html>