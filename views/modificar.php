<?php
require_once '../vendor/autoload.php';
require_once('..\controller\selecionado.php');

//Carga un Arreglo con los resultados de la función
$animes = selection($_GET['id']);
$info = [];
foreach ($animes as $key => $value) {
    $info[$key] = $value;
}
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
    <title>Modificar Info</title>
</head>

<body class="darling">
    <div class="grid-x login-grid grid-container align-center-middle superior">
        <div class="cell align-middle align-center small-10 medium-4 large-4 superior">
            <form class="log-in-form" method="post" action="..\controller\actualizar.php">
                <h4 class="text-center">Actualizar</h4>
                <input type="hidden" name="id_anime" id="id_anime" value="<?php echo $info['id_anime'] ?>">
                <input type="text" name="name" value="<?php echo $info['name_anime'] ?>" required>
                <input type="number" name="caps" value="<?php echo $info['caps_anime'] ?>" min="0" step="1" required>
                <label>
                    <select name="source" type="text">
                        <option></option>
                        <option value="ORIGINIAL">ORIGINIAL</option>
                        <option value="MANGA">MANGA</option>
                        <option value="MANGA">NOVELA</option>
                        <option value="MANGA">OTRO</option>
                    </select>
                </label>
                <label>
                    <select name="type" type="text">
                        <option></option>
                        <option value="SERIE">SERIE</option>
                        <option value="PELICULA">PELICULA</option>
                        <option value="OVA">OVA</option>
                        <option value="ONA">ONA</option>
                        <option value="OTRO">OTRO</option>
                    </select>
                </label>
                <input type="text" name="author" value="<?php echo $info['autor_anime'] ?>">
                <input type="text"  name="studio" value="<?php echo $info['estudio_anime'] ?>" required>
                <p class="butoncito"><input type="submit" class="button expanded" value="Enviar"></p>
            </form>
        </div>
    </div>
</body>

</html>