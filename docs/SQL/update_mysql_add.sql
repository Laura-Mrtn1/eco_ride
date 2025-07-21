CREATE DATABASE eco_ride;
USE eco_ride;


CREATE TABLE sit_parametre (
    parametre_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    parametre_propriete VARCHAR(50),
    parametre_valeur VARCHAR(50)
);


CREATE TABLE sit_configuration (
    configuration_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE sit_utilisateur (
    utilisateur_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    utilisateur_nom VARCHAR(50),
    utilisateur_prenom VARCHAR(50),
    utilisateur_email VARCHAR(50),
    utilisateur_password VARCHAR(50),
    utilisateur_telephone VARCHAR(50),
    utilisateur_adresse VARCHAR(50),
    utilisateur_date_naissance VARCHAR(50),
    utilisateur_photo BLOB,
    utilisateur_pseudo VARCHAR(50)
);

CREATE TABLE sit_role (
    role_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    role_libelle VARCHAR(50)
    utilisateur_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES sit_utilisateur(utilisateur_id) ON DELETE NO ACTION ON UPDATE NO ACTION
);

CREATE TABLE sit_avis(
    avis_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    avis_commentaire VARCHAR(50),
    avis_note VARCHAR(50),
    avis_statut VARCHAR(50)
    utilisateur_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES sit_utilisateur(utilisateur_id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE sit_voiture(
    voiture_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    voiture_modele VARCHAR(50),
    voiture_immatriculation VARCHAR(50),
    voiture_energie VARCHAR(50),
    voiture_couleur VARCHAR(50),
    voiture_date_premiere_immatriculation VARCHAR(50),
    utilisateur_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES sit_utilisateur(utilisateur_id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE sit_covoiturage(
    covoiturage_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    covoiturage_date_depart DATE,
    covoiturage_heure_depart DATE,
    covoiturage_lieu_depart VARCHAR(50),
    covoiturage_date_arrivee DATE,
    covoiturage_heure_arrivee DATE,
    covoiturage_lieu_arrivee VARCHAR(50),
    covoiturage_statut VARCHAR(50),
    covoiturage_nb_place INT(50),
    covoiturage_prix_personne FLOAT,
    utilisateur_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES sit_utilisateur(utilisateur_id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE sit_marque(
    marque_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    marque_libelle VARCHAR(50),
    voiture_id INT,
    FOREIGN KEY (voiture_id) REFERENCES sit_voiture(voiture_id) ON DELETE CASCADE ON UPDATE CASCADE
);