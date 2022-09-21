/Ejercicio 02: En una zapatería sólo se venden 5 productos.<br>Tengo los productos y los precios guardados en 2 arrays (en uno los productos y en otro los precios).<br>Hay que visualizar cada producto con su precio.<br><br>

<!DOCTYPE html>
<html>
<body>
<?php
$producto = array("Charoles","Zapatillas","Botas","Tacones","Sandalias");
$precio = array(90,20,35,40,15);

for ($i = 0; $i < count($producto); $i++) {
    echo $producto[$i]." = ".$precio[$i]."€";
    echo "<br>";
}
?>
</body>
</html>