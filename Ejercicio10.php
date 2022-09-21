/Ejercicio 10: En este programa tendrás que utilizar un array asociativo para guardar como key cada día de la semana y asociar a cada día un valor entero. Se trandrá que mostrar en pantalla cada día y valor almacenado en el array así como la suma y media de todos los valores guadados en el array.<br><br>

<!DOCTYPE html>
<html>
<body>
<?php
$dias = array ("Lunes" => 6, "Martes" => 5, "Miercoles" => 8,"Jueves" => 3, "Viernes" => 2, "Sabado" => 10,"Domingo" => 9);
$suma = 0;
$media;
foreach ($dias as $item => $dias){
    echo "/".$item.": ".$dias."<br>";
}
for($i=0;$i<count($dias); $i++){
    $suma = $suma + $dias;
}

    echo "/".$item.": ".$dias."<br>";
?>
</body>
</html>