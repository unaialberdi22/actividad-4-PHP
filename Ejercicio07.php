/Ejercicio 07: Hasta ahora para visualizar el contenido de una variable hemos utilizado echo o print.<br>En el caso de los arrays se puede utilizar la orden print_r($array) para visualizar el contenido del array junto con su índice.<br> 
Se debe realizar un programa que cree un array con 10 números aleatorios (números entre 1 y 200) los imprima de las dos formas que aparecen en pantalla y después los imprima al revés.  
<br><br>

<!DOCTYPE html>
<html>
<body>
<?php
$numeros = array();
echo "En orden"."<br>";
for($i=0; $i<=9; $i++){
    array_push($numeros, rand(1,200));
    echo $numeros[$i]."  ";
}
echo "<br>"."printeo array"."<br>";
print_r($numeros);

echo "<br>"."Invertido"."<br>";
    for ($i = 9; $i >= 0; $i--) {
        echo $numeros[$i]."  ";
    }
?>
</body>
</html>
