create database regime;

use regime;

-----------------------------------FRONT-OFFICE-----------------------------------
CREATE TABLE Client(
    id_client INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    date_de_naissance DATE,
    genre VARCHAR(255),
    taille DECIMAL(10,2),
    email VARCHAR(255),
    mdp VARCHAR(255)
);

CREATE TABLE Compte(
    id_compte INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_client INT,
    montant DECIMAL(10,2),
    FOREIGN KEY (id_client) REFERENCES Client (id_client)
);

CREATE TABLE Mvt_compte(
    id_mvt INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_compte INT,
    benefice DECIMAL(10,2),
    depense DECIMAL(10,2),
    dates DATE,
    FOREIGN KEY (id_compte) REFERENCES Compte (id_compte)
);

CREATE TABLE Code(
    id_code INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(255),
    valeur DECIMAL(10,2)
);

CREATE TABLE Demande_code(
    id_code INT,
    id_client INT,
    etat INT    ---(0, 5)
    FOREIGN KEY (id_code) REFERENCES Code (id_code),
    FOREIGN KEY (id_client) REFERENCES Client (id_client)
);

-------------------------------- ALIMENTAIRE-----------------------------------------------------

CREATE TABLE Regime_Alimentaire(
    id_regime_Alime INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255),
    action INT,
    valeur DECIMAL(10,2),
    duree INT,
    prix DECIMAL(10,2)
);

CREATE TABLE Plat(
    id_plat INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    categorie INT,
    calorie DECIMAL(10,2)
);

CREATE TABLE Repas(
    id_repas INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    types INT,
    id_Entrer INT,
    id_Resistance INT,
    id_Dessert INT,
    FOREIGN KEY (id_Entrer) REFERENCES Plat (id_plat),
    FOREIGN KEY (id_Resistance) REFERENCES Plat (id_plat),
    FOREIGN KEY (id_Dessert) REFERENCES Plat (id_plat)
);

CREATE TABLE Menu(
    id_menu INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255),
    id_Pdeg INT,
    id_Deg INT,
    id_diner INT,
    FOREIGN KEY (id_Pdeg) REFERENCES Repas (id_repas),
    FOREIGN KEY (id_Deg) REFERENCES Repas (id_repas),
    FOREIGN KEY (id_diner) REFERENCES Repas (id_repas)
);

----------------------------------------SPORTIVE-----------------------------------------------
CREATE TABLE Regime_sportive(
    id_regime_sport INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255),
    action INT,
    valeur DECIMAL(10,2),
    duree_Jour INT
);

CREATE TABLE Mvt_physique(
    id_mvt INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255),
    PRIMARY KEY (id_mvt)
);

CREATE TABLE Sport(
    id_regime_sport INT,
    id_mvt INT,
    duree INT,
    FOREIGN KEY (id_regime_sport) REFERENCES Regime_sportive (id_regime_sport),
    FOREIGN KEY (id_mvt) REFERENCES Mvt_physique (id_mvt)
);

----------------------------------------OBJECTIF---------------------------------------------
CREATE TABLE Objectif(
    id_objectif INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_client INT,
    poids_final DECIMAL(10,2),
    date_debut DATE,
    date_fin DATE,
    id_regime_Alime INT,
    id_regime_sport INT,
    FOREIGN KEY (id_regime_Alime) REFERENCES Regime_Alimentaire (id_regime_Alime),
    FOREIGN KEY (id_regime_sport) REFERENCES Regime_sportive (id_regime_sport),
    FOREIGN KEY (id_client) REFERENCES Client (id_client)
);

CREATE TABLE Historique_poids(
    id_client INT,
    poids DECIMAL(10,2),
    dates DATE,
    FOREIGN KEY (id_client) REFERENCES Client (id_client)
);

-------------------------------------BACK-OFFICE----------------------------------------------

CREATE TABLE Admin(
    id_admin INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    mdp VARCHAR(255)
);

CREATE TABLE Caisse(
    id_caisse INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    montant DECIMAL(10,2)
);

CREATE TABLE Mvt_Caisse(
    id_mvt_caisse INT NOT NULL AUTO_INCREMENT,
    id_caisse INT,
    benefice DECIMAL(10,2),
    depense DECIMAL(10,2),
    dates DATE,
    FOREIGN KEY (id_caisse) REFERENCES Caisse (id_caisse),
    PRIMARY KEY (id_mvt_caisse)
);
SELECT count(id_client) as nb From Client;