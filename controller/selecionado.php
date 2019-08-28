<?php
require_once('..\vendor\autoload.php');

function selection($id)
{
    $wsdl = "http://localhost/conexiondb/WSTarea5/main/index.php?wsdl";

    // crear el objeto del cliente
    $client = new nusoap_client($wsdl,'wsdl');

    $err = $client->getError();
    if ($err) {
        //si hay error despliega el tad html del mismo
        echo '<h2>Error en la construccion</h2>';
        // At this point, you know the call that follows eill fail.
        exit();
    }

    // Call the hello method 
    $result1=$client->call('despliegue', array('id' => $id));
    $resultado = json_decode($result1);
    return $resultado;
}
