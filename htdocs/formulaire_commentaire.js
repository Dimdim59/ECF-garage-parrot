// oblige de remplir ,tout les champs

const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
  const nom = document.getElementById('nom').value;
  const prenom = document.getElementById('prenom').value;
  const mail = document.getElementById('mail').value;
  const numero = document.getElementById('numero').value;
  const adresse = document.getElementById('adresse').value;
  const titre_commentaire = document.getElementById('titre_commentaire').value;
  const commentaire = document.getElementById('commentaire');
  if (!nom || !prenom || !mail || !numero || !adresse || !titre_commentaire || !commentaire ) {
    event.preventDefault();
    alert('Tous les champs sont obligatoires');
  }
});