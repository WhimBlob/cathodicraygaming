-- Suppression de la base si elle existe (utile pour réinitialiser)
DROP DATABASE IF EXISTS cathodic_ray_gamer;

-- Création de la base "cathodic-ray_gamer"
CREATE DATABASE cathodic_ray_gamer;

USE cathodic_ray_gamer;

-- Création de la table "employes"
CREATE TABLE users (
	id_user INT(3) NOT NULL AUTO_INCREMENT,
	mail VARCHAR(40) NOT NULL,
    num_tel INT(10) NOT NULL,
    prenom VARCHAR(20) NOT NULL,
    nom VARCHAR(20) NOT NULL,
    role VARCHAR(20) NOT NULL,
    mdp VARCHAR(20) NOT NULL,
    adresse_post TEXT NOT NULL,
    PRIMARY KEY (id_user)
) ENGINE=InnoDB ;

CREATE TABLE produits (
	id_produit INT(1) NOT NULL AUTO_INCREMENT,
    stock INT(4) NOT NULL,
    prix FLOAT(6) NOT NULL,
    nom_produit VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_produit)
) ENGINE=InnoDB ;
    
    CREATE TABLE achats (
    id_achat INT(5) NOT NULL AUTO_INCREMENT,
    id_produit INT(1) NOT NULL,
    id_user INT(3) NOT NULL,
    date_achat DATE NOT NULL,
    PRIMARY KEY(id_achat)
) ENGINE=InnoDB ;