<?php
$host = getenv('DB_HOST') ?: 'db';
$dbname = getenv('DB_NAME') ?: 'holamundo';
$username = getenv('DB_USER') ?: 'appuser';
$password = getenv('DB_PASSWORD') ?: 'apppassword';

$connected = false;

for ($i = 0; $i < 10; $i++) {
    try {
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );

        $connected = true;
        break;
    } catch (PDOException $e) {
        sleep(2);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo con MySQL</title>
</head>
<body>
    <h1>¡Hola Mundo!</h1>
    <p>Mi primera aplicación web con PHP, MySQL y Docker Compose.</p>

    <?php if ($connected): ?>
        <h2>Conexión a MySQL exitosa</h2>
        <p>La aplicación se conectó correctamente a la base de datos.</p>
    <?php else: ?>
        <h2>No se pudo conectar a MySQL</h2>
        <p>Verifica que los servicios estén funcionando correctamente.</p>
    <?php endif; ?>
</body>
</html>
