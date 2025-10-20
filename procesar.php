<?php
session_start();

$archivo = 'usuarios.txt'; // archivo donde se guardan los usuarios
$accion = $_POST['accion'] ?? '';

$usuario = trim($_POST['usuario'] ?? '');
$clave = trim($_POST['clave'] ?? '');

// Validar campos vacíos
if (empty($usuario) || empty($clave)) {
    die("Debes rellenar ambos campos. <a href='index.html'>Volver</a>");
}

if ($accion === 'registrar') {
    // Verificar si ya existe
    if (file_exists($archivo)) {
        $usuarios = file($archivo, FILE_IGNORE_NEW_LINES);
        foreach ($usuarios as $linea) {
            list($u, $h) = explode(':', $linea);
            if ($u === $usuario) {
                die("El usuario <strong>$usuario</strong> ya existe. <a href='index.html'>Volver</a>");
            }
        }
    }

    // Guardar con hash
    $hash = password_hash($clave, PASSWORD_DEFAULT);
    file_put_contents($archivo, "$usuario:$hash\n", FILE_APPEND);
    echo "Registro exitoso. Ahora puedes <a href='index.html'>iniciar sesión</a>.";
    exit;

} elseif ($accion === 'login') {
    if (!file_exists($archivo)) {
        die("No hay usuarios registrados aún. <a href='index.html'>Regístrate</a>");
    }

    $usuarios = file($archivo, FILE_IGNORE_NEW_LINES);
    foreach ($usuarios as $linea) {
        list($u, $h) = explode(':', $linea);
        if ($u === $usuario && password_verify($clave, $h)) {
            $_SESSION['usuario'] = $usuario;
            echo "Bienvenido, <strong>$usuario</strong>. <a href='logout.php'>Cerrar sesión</a>";
            exit;
        }
    }

    echo "Usuario o contraseña incorrectos. <a href='index.html'>Volver</a>";
    exit;

} else {
    echo "Acción no válida. <a href='index.html'>Volver</a>";
}
