<?php
require_once('..\vendor\autoload.php');
$wsdl = "http://localhost/conexiondb/WSTarea5/main/index.php?wsdl";

var_dump($wsdl);

// crear el objeto del cliente
$client = new nusoap_client($wsdl,'wsdl');

$err = $client->getError();
if ($err) {
    //si hay error despliega el tad html del mismo
    echo '<h2>Error en la construccion</h2>';
    // At this point, you know the call that follows eill fail.
    exit();
}

// Carga los datos para la consulta
$id = (int)$_POST['id_anime'];
$anime = ["name" => $_POST['name'], "caps" => $_POST['caps'], "source" => $_POST['source'], 
        "type" => $_POST['type'], "author" => $_POST['author'], "studio" => $_POST['studio']];

// Call the hello method 
$result1=$client->call('actualizar', array('serie_anime'=> $anime, 'id' => $id));
var_dump($result1);

// Redirecciona al terminar
if ($result1 == '1') {
    echo '<script type="text/javascript">alert("Transferencia exitosa"); 
    window.location.href="../views/registros.php";   </script>';
} else {
    echo '<script type="text/javascript">alert("Error en la transferencia"); 
    window.location.href="../views/index.php";   </script>';
}