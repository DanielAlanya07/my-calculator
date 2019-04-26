<?php
$n=$_GET["valor"];
echo "Estos son los numeros aleatorios entre 1 y 100 <br />";
$cantidad=1;
$suma=1;
while ($cantidad<=$n){
    $rand=rand(1,100);
    echo "Numero aleatorio".$rand."<br>";
    ++$cantidad;
    $suma+=$rand;
}
echo "La suma de los n&uacute;meros generados es: ".$suma; 
?>