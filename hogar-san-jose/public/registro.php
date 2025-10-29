<?php
// filepath: c:\Users\User\Downloads\Hojar San Jose\registro.php

require_once '../src/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $db = new Database();
    $conn = $db->getConnection();

    $stmt = $conn->prepare("INSERT INTO visitantes (nombre, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $email);

    if ($stmt->execute()) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro - Hogar San Jose</title>
</head>
<body>
    <h1>Registro de Visitantes</h1>
    <form method="POST" action="registro.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <button type="submit">Registrar</button>
    </form>
</body>
</html>