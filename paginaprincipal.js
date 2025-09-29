"use strict"


document.addEventListener('DOMContentLoaded', function() {
  const githubLink = document.getElementById('github-link');

  githubLink.addEventListener('click', function(event) {
    event.preventDefault(); 
    window.open(
      this.href,
      'githubPopup',
      'width=800,height=600,resizable=yes,scrollbars=yes'
    );
  });
});
