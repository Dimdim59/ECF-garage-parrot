CREATE TABLE IF NOT EXISTS `automobile` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `marque` VARCHAR(255) NOT NULL,
  `modele` VARCHAR(255) NOT NULL,
  `annee` INT NOT NULL,
  `kilometrage` INT NOT NULL,
  `prix` INT NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `automobile` (`marque`, `modele`, `annee`, `kilometrage`, `prix`) VALUES
  ('Renault', 'Clio', 2018, 80000, 10000),
  ('Peugeot', '208', 2020, 40000, 15000),
  ('Citroën', 'C3', 2022, 10000, 20000),
  ('Volkswagen', 'Polo', 2016, 120000, 8000),
  ('Ford', 'Fiesta', 2019, 60000, 12000),
  ('Toyota', 'Yaris', 2021, 30000, 18000);
