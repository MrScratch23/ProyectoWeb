"use strict"

document.addEventListener('DOMContentLoaded', function() {
  // Código para abrir ventana GitHub
  const githubLink = document.getElementById('github-link');
  githubLink.addEventListener('click', function(event) {
    event.preventDefault(); 
    window.open(
      this.href,
      'githubPopup',
      'width=800,height=600,resizable=yes,scrollbars=yes'
    );
  });

  // Código para validar el formulario
  const form = document.getElementById('registroForm');

  if (form) {  // Verifica que exista el formulario en la página
    form.addEventListener('submit', (e) => {
      const usuario = form.usuario.value.trim();
      const clave = form.clave.value.trim();
      let errores = [];

      // Validar usuario
      if (usuario.length < 3) {
        errores.push("El usuario debe tener al menos 3 caracteres.");
      }
      if (!/^[a-zA-Z0-9_]+$/.test(usuario)) {
        errores.push("El usuario solo puede contener letras, números y guiones bajos.");
      }

      // Validar contraseña
      if (clave.length < 6) {
        errores.push("La contraseña debe tener al menos 6 caracteres.");
      }

      if (errores.length > 0) {
        e.preventDefault(); // Cancelar envío
        alert(errores.join("\n"));
      }
    });
  }
});
