<?php
require_once '../vendor/autoload.php';
require_once('..\controller\selecionado.php');

$animes = selection($_GET['id']);
$info = [];
foreach ($animes as $key => $value) {
    $info[$key] = $value;
}

// Prepara el Link al cual será redireccionado 
$este = strtolower($info['name_anime']);
$este = str_replace(' ','-', $este);
$este = "https://jkanime.net/$este";
echo'<script type="text/javascript">  window.location.href="'.$este.'"; </script>';
?>