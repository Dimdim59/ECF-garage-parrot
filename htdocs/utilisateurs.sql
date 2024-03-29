CREATE TABLE utilisateurs (
id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(255) NOT NULL,
  prenom VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  mot_de_passe VARCHAR(255) NOT NULL,
  date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP,
  role ENUM('visiteur', 'employé', 'admin') DEFAULT 'admin';
 );
