/Ejercicio 09: Crear un array asociativo con los nombres de meses como índice y los números de los días valor <br><br>

<!DOCTYPE html>
<html>
<body>
<?php
$dias = array ("Enero" => "31", "Febrero" => "28", "Marzo" => "31","Abril" => "30", "Mayo" => "31", "Junio" => "30","Julio" => "31", "Agosto" => "30", "Septiembre" => "31","Octubre" => "30", "Noviembre" => "31", "Diciembre" => "30");

foreach ($dias as $item => $dias){
    echo "/".$item.": ".$dias."<br>";
}

?>
</body>
</html>