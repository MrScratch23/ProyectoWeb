<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Iniciar Sesión</title>
</head>
<body>
  <h2>Iniciar Sesión</h2>
  <form action="procesar.php" method="POST">
    <input type="hidden" name="accion" value="login" />
    <input type="text" name="usuario" placeholder="Usuario" required />
    <input type="password" name="clave" placeholder="Contraseña" required />
    <button type="submit">Entrar</button>
  </form>
  <p>¿No tienes cuenta? <a href="index.html">Regístrate aquí</a></p>
</body>
</html>
