<?php
$colores = ["Rojo", "Azul", "Verde", "Amarillo", "Morado"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglo Indexado</title>
    <style>
        body { font-family: Arial; background-color:rgb(173, 205, 232); padding: 20px; }
        h2 { color:rgb(11, 25, 39); }
        li { margin: 5px 0; }
    </style>
</head>
<body>
    <h2>Colores</h2>
    <ul>
        <?php foreach ($colores as $color): ?>
            <li><?= $color ?></li>
        <?php endforeach; ?>
    </ul>

    <p><strong>Primer color:</strong> <?= $colores[0] ?></p>
    <p><strong>Último color:</strong> <?= $colores[count($colores) - 1] ?></p>
    <p><strong>Cantidad total de colores:</strong> <?= count($colores) ?></p>
</body>
</html>
