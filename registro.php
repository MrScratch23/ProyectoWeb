<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registro - ToTheStarts</title>

    <link rel="stylesheet" href="paginaprincipal.css" />
    <script src="paginaprincipal.js" defer></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <header class="header-container">
      <div class="left-text">Hacia las estrellas</div>

      <img
        src="astral-express-honkai-star-rail.gif"
        alt="Logo principal"
        class="center-image"
      />

      <div class="right-text">
        <a href="index.php" style="color: white; font-weight: bold;">Volver a Inicio</a>
      </div>
    </header>

    <main>
      <nav class="menu-categorias">
        <ul>
          <li>
            <a href="index.php"><i class="fas fa-home"></i> Principal</a>
          </li>
          <li>
            <a href="personajes.html"><i class="fas fa-users"></i> Personajes</a>
          </li>
          <li>
            <a href="tierlist.html"><i class="fas fa-chart-bar"></i> Tier list</a>
          </li>
          <li>
            <a href="memoriacaos.html"><i class="fas fa-brain"></i> Memoria del Caos</a>
          </li>
          <li>
            <a href="puraficcion.html"><i class="fab fa-twitter"></i> Pura Ficcion</a>
          </li>
          <li>
            <a href="aposhadow.html"><i class="fas fa-radiation-alt"></i> Apocalyptic Shadow</a>
          </li>
          <li>
            <a href="conosluz.html"><i class="fas fa-cube"></i> Conos de Luz</a>
          </li>
          <li>
            <a href="artefactos.html"><i class="fas fa-dice"></i> Artefactos</a>
          </li>
          <li class="separator"></li>
          <li>
            <a href="#"><i class="fas fa-book"></i> Guias</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-tools"></i> Herramientas</a>
          </li>
          <li class="separator"></li>
          <li>
            <a href="https://github.com/MrScratch23" id="github-link"
              ><i class="fas fa-blog"></i> Github del creador</a
            >
          </li>
          <li>
            <a href="#" class="play-mac"
              ><i class="fab fa-apple"></i> Juega en Mac</a
            >
          </li>
        </ul>
      </nav>

      <div class="contenido-principal">
        <section class="main-title-section">
          <h1>Registro de usuario</h1>
          <p>Rellena los datos para crear tu cuenta.</p>
        </section>

        <section class="registration-form-section" style="max-width: 400px; margin: auto;">
          <form id="registroForm" action="procesar.php" method="POST" class="registration-form">
            <input type="hidden" name="accion" value="registrar" />
            <input type="text" name="usuario" placeholder="Usuario" required />
            <input type="password" name="clave" placeholder="Contraseña" required />
            <button type="submit">Registrarse</button>
          </form>
        </section>
      </div>
    </main>

    <footer class="footer">
      <p>
        &copy; 2025 Rubén Daniel Ternero Molina. Este sitio es un proyecto
        personal sin fines comerciales. Honkai: Star Rail y todo su contenido
        son propiedad de miHoYo / HoYoverse.
      </p>
    </footer>
  </body>
</html>
