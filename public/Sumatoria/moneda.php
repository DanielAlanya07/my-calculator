<?php        
    // averiguamos si se ingresó un motno
    if (isset($_POST['monto'])) {
      define ("cantidad", $_POST['monto']);
    } else {
      define ("cantidad", 0);
    }
    // definimos los paises
    $paises = array ("Dolar","Euro","Pesos Colombianos");
    // definimos el tipo de cambio por cada pais
    $tasacambios = array (0.30,0.27,965.26);
    // imprimimos el monto ingresado
    echo "<b>".cantidad." Soles</b> convertidos a las siguientes monedas:<br><br>";                                                
    // por cada pais imprimimos el cambio
    for ($i=0;$i<count($paises);$i++){
           echo "$paises[$i] ";
           // calculamos el cambio
           $cambio=$tasacambios[$i]*cantidad;
           // imprimos el resultado con el formato de moneda
           echo   number_format($cambio,2,",",".");
           echo "<br>";
    }
   ?>