<?php 
require_once '../vendor/autoload.php';
require_once('..\controller\animes.php');

$animes = resultadosSelect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="..\vendor\zurb\foundation\dist\css\foundation.css">
    <link rel="stylesheet" href="..\public\css\main.css">
    <link rel="shortcut icon" href="..\public\static\img\icon\icon.png" type="image/x-icon">
    <title>Animes Registrados</title>
</head>
<body class="darling">
    <div class="grid-container">
    <div class="grid-container">
    <div class="grid-x superior">
        <div class="cell"><h2 class="t_registro">Animes Registrados</h2></div>
        <div class="cell auto"><a href="index.php"><button class="button secondary">Ingresar Animes<button></a></div>
    </div>
    <table class="hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Episodios</th>
                <th>Origen</th>
                <th>Tipo</th>
                <th>Autor</th>
                <th>Estudio</th>
                <th>Editar</th>
                <th>Ver</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $idK = 0;
            $idV = '';
            foreach ($animes as $value) {
                echo "<tr>";
                foreach ($value as $key => $info) {
                    if ($key == 'id_anime') {
                        $idK = $key;
                        $idV = $info;
                    } 
                    echo "<td>$info </td>";
                }
                echo '<td><a href="modificar.php?id='.$idV.'"><img src="https://image.flaticon.com/icons/svg/1159/1159633.svg" height="32px" width="32px"></a></td>';
                echo '<td><a href="..\controller\send.php?id='.$idV.'"><img src="https://image.flaticon.com/icons/svg/131/131917.svg" height="32px" width="32px"></a></td>';
                echo '<td><a href="#?id='.$idV.'"><img src="https://image.flaticon.com/icons/svg/1214/1214428.svg" height="32px" width="32px"></a></td>';
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
    </div>
    
    </div>


</body>