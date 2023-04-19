

// MODE JOUR/NUIT

const body = document.querySelector("body"),
modeToggle = document.querySelector(".dark-light");
modeToggle.addEventListener("click", () => {
modeToggle.classList.toggle("active");
body.classList.toggle("dark");
if (!body.classList.contains("dark")) {
  localStorage.setItem("mode", "light-mode");
} else {
  localStorage.setItem("mode", "dark-mode");
}
})



// CURSEUR 

      // Récupération des éléments HTML
      const barre = document.querySelector('.barre');
      const curseur = document.querySelector('.curseur');

      // Variables pour stocker la position du curseur
      let positionCurseur = 0;
      let positionMax = barre.offsetWidth - curseur.offsetWidth;

      // Ajout d'un écouteur d'événements pour le clic et le déplacement de la souris
      curseur.addEventListener('mousedown', (e) => {
        e.preventDefault(); // Empêche la sélection de texte lors du clic
        document.addEventListener('mousemove', bougerCurseur);
        document.addEventListener('mouseup', relacherCurseur);
      });

      // Fonction pour bouger le curseur
      function bougerCurseur(e) {
        // Calcul de la nouvelle position du curseur
        let nouvellePosition = e.pageX - barre.offsetLeft - (curseur.offsetWidth / 2);
        
        // Empêche le curseur de sortir de la barre
        if (nouvellePosition < 0) {
          nouvellePosition = 0;
        } else if (nouvellePosition > positionMax) {
          nouvellePosition = positionMax;
        }
        
        // Met à jour la position du curseur
        curseur.style.left = nouvellePosition + 'px';
        positionCurseur = nouvellePosition;
      }

      // Fonction pour relâcher le curseur
      function relacherCurseur() {
        document.removeEventListener('mousemove', bougerCurseur);
        document.removeEventListener('mouseup', relacherCurseur);
  }



