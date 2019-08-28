<?php
require_once '../vendor/autoload.php';
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
    <title>Login</title>
</head>
<body class="darling">
<div class="translucent-form-overlay">
    <form action="..\controller\insertar.php" method="post">
        <h3>Registro de Animes</h3>
        <input type="hidden" name="idvo" id="idVo">
        <div class="row columns">
            <label>Nombre del anime
                <input type="text" name="name" placeholder="Barakamon" required>
            </label>
        </div>
        <div class="row columns">
            <label>Cantidad de episodios
                <input type="number" name="caps" placeholder="XX" min="0" step="1" required>
            </label>
        </div>
        <div class="Origen del anime">
            <label>Origen
                <select name="source" type="text">
                    <option></option>
                    <option value="ORIGINIAL">ORIGINIAL</option>
                    <option value="MANGA">MANGA</option>
                    <option value="MANGA">NOVELA</option>
                    <option value="MANGA">OTRO</option>
                </select>
            </label>
        </div>
        <div class="row columns">
            <label>Tipo
                <select name="type" type="text">
                    <option></option>
                    <option value="SERIE">SERIE</option>
                    <option value="PELICULA">PELICULA</option>
                    <option value="OVA">OVA</option>
                    <option value="ONA">ONA</option>
                    <option value="OTRO">OTRO</option>
                </select>
            </label>
        </div>
        <div class="row">
            <label class="columns small-12">Autor
                <div class="columns small-6">
                    <input type="text" name="author" placeholder="Eichiro Oda">
                </div>
            </label>
            <label class="columns small-12">Estudio de animación
                <div class="columns small-6">
                    <input type="text"  name="studio" placeholder="MadHouse" required>
                </div>
            </label>
        </div>
        <div class="row">
            <div class="columns small-12">
                <input type="submit" value="Enviar" class="primary button expanded">
            </div>
            <div class="columns small-6">
                <input type="reset" value="Reset" class="success button">
               
            </div>
        </div>
    </form>
    <a href="registros.php"><button class="button">Ver Registro</button></a>
</div>
</body>
</html>