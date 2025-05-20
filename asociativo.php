<?php
$usuario = [
    "Nombre" => "Luis",
    "Edad" => 30,
    "Email" => "luis.garcia@example.com",
    "Carrera" => "Desarrollo de Software"
];

// Modificaciones
$usuario["Edad"] = 31;
$usuario["Activo"] = true;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglo Asociativo</title>
    <style>
        body { font-family: Arial; background-color: #fef6e4; padding: 20px; }
        h2 { color: #d17c78; }
        table { border-collapse: collapse; width: 400px; background: #fff; border: 1px solid #ccc; }
        td { padding: 8px; border: 1px solid #ccc; }
        pre { background: #f4f4f4; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>Información del Usuario</h2>
    <table>
        <tr><td><strong>Nombre:</strong></td><td><?= $usuario["Nombre"] ?></td></tr>
        <tr><td><strong>Edad:</strong></td><td><?= $usuario["Edad"] ?></td></tr>
        <tr><td><strong>Email:</strong></td><td><?= $usuario["Email"] ?></td></tr>
        <tr><td><strong>Carrera:</strong></td><td><?= $usuario["Carrera"] ?></td></tr>
        <tr><td><strong>Activo:</strong></td><td><?= $usuario["Activo"] ? "Sí" : "No" ?></td></tr>
    </table>

    <h3>Array completo (usando <code>print_r</code>):</h3>
    <pre><?php print_r($usuario); ?></pre>
</body>
</html>
