const vehicules = [
    {
      marque: "Renault",
      modele: "Clio",
      annee: 2018,
      kilometrage: 80000,
      prix: 10000,
      photos: ["voiture1_photo1.jpg", "voiture1_photo2.jfif"],
    },

    {
        marque: "Peugeot",
        modele: "208",
        annee: 2013,
        kilometrage: 380000,
        prix: 100,
        photos: ["voiture2_photo1.jpg", "voiture2_photo2.jfif"],
      },

      {
        marque: "Alfa Romeo",
        modele: "159",
        annee: 2013,
        kilometrage: 80000,
        prix: 10000,
        photos: ["voiture3_photo1.jpg", "voiture3_photo2.jpg"],
      },

      {
        marque: "Citroen",
        modele: "C3",
        annee: 2022,
        kilometrage: 10000,
        prix: 20000,
        photos: ["voiture4_photo1.jpg", "voiture4_photo2.jfif"],
      },

      {
        marque: "Ford",
        modele: "Fiesta",
        annee: 2018,
        kilometrage: 70000,
        prix: 12000,
        photos: ["voiture5_photo1.jpg", "voiture5_photo2.jfif"],
      },

      {
        marque: "Toyota",
        modele: "Yaris",
        annee: 2021,
        kilometrage: 5000,
        prix: 10025,
        photos: ["voiture6_photo1.jpg", "voiture6_photo2.jpg"],
      },
   ];
     
  const rechercheInput = document.getElementById("recherche-input");
  const listeVehicules = document.querySelector(".vehicules");
  
  rechercheInput.addEventListener("input", () => {
    const recherche = rechercheInput.value.toLowerCase();
    listeVehicules.innerHTML = "";
  
    vehicules.forEach((vehicule) => {
      if (
        vehicule.marque.toLowerCase().includes(recherche) ||
        vehicule.modele.toLowerCase().includes(recherche)
      ) {
        afficherVehicule(vehicule);
      }
    });
  });
  
  function afficherVehicule(vehicule) {
    const elementVehicule = document.createElement("li");
    elementVehicule.classList.add("vehicule");
  
    const htmlVehicule = `
      <h2>${vehicule.marque} ${vehicule.modele}</h2>
      <img src="images/${vehicule.photos[0]}" alt="${vehicule.modele}">
      <img src="images/${vehicule.photos[1]}" alt="${vehicule.modele}">
      <p>Année : ${vehicule.annee}</p>
      <p>Kilométrage : ${vehicule.kilometrage} km</p>
      <p>Prix : ${vehicule.prix} €</p>
    `;
  
    elementVehicule.innerHTML = htmlVehicule;
    listeVehicules.appendChild(elementVehicule);
  }
  
  // Affichage initial des 6 voitures
  vehicules.forEach((vehicule) => {
    afficherVehicule(vehicule);
  });

  const filtreKilometrage = document.getElementById("filtre-kilometrage");

  filtreKilometrage.addEventListener("input", () => {
    const valeurKilometrage = parseInt(filtreKilometrage.value);
  
    listeVehicules.innerHTML = "";
  
    vehicules.forEach((vehicule) => {
      if (vehicule.kilometrage <= valeurKilometrage) {
        afficherVehicule(vehicule);
      }
    });
  });
  function getKilometrage(vehicule) {
    return vehicule.kilometrage;
  }
  