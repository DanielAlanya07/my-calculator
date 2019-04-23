<?php
$n=$_GET["valorn"];
echo "Ingrese un numero: ".$n."<br>";
$cantidad=1;
$suma=0;
while ($cantidad<=$n){
    $rand=rand(1,100);
    echo "Numero aleatorio $rand <br />";
    $cantidad++;
    $suma = $suma + $rand;
}

echo "La suma de los n&uacute;meros generados es $suma <br />"; 
?>