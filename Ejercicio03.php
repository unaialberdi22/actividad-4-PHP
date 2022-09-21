/Ejercicio 03: Para realizar este ejercicio copiar y renombrar el ejercicio02.<br>
Nuestra zapatería pondrá rebajas. Hay que cambiar los precios de todos los productos.<br>La rebaja estará guardada en una variable y será un tanto por ciento. (20%, 50%,...) ejemplo: $rebaja = 20;<br>
Por pantalla se imprimirán los  productos con viejo y el precio nuevo, los nuevos precios se guardarán en el array de precios (al finalizar el programa el array de precios quedará con los los precios nuevos)
<br><br>

<!DOCTYPE html>
<html>
<body>
<?php
$producto = array("Charoles","Zapatillas","Botas","Tacones","Sandalias");
$precio = array(90,20,35,40,15);
$rebaja = 20;

for ($i = 0; $i < count($producto); $i++) {
    echo $producto[$i].": antes = ".$precio[$i]."€"."/ ahora = ".($precio[$i]-($precio[$i]/100*$rebaja))."€";
    echo "<br>";
}
?>
</body>
</html>