create database regime;

use regime;

-----------------------------------FRONT-OFFICE-----------------------------------
CREATE TABLE Client(
    id_client INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    prenom VARCHAR(255),
    date_de_naissance DATE,
    genre VARCHAR(255),
    email VARCHAR(255),
    mdp VARCHAR(255)
);

INSERT INTO Client VALUES(null, 'Raz', 'Sanda', '1999-12-31', 'M', 'sanda@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

CREATE TABLE informations_de_sante(
    id_client INT,
    taille DECIMAL(10,2),
    poids DECIMAL(10,2),
    dates DATE,
    FOREIGN KEY (id_client) REFERENCES Client (id_client)
);

SELECT c.id_client, c.nom,c.prenom,c.date_de_naissance,c.genre,c.email,ids.taille,ids.poids,max(dates) as dates 
FROM informations_de_sante as ids
JOIN Client as c ON c.id_client = ids.id_client
WHERE c.id_client=1;

INSERT INTO informations_de_sante VALUES(1, 180, 67, '2023-06-17');
INSERT INTO informations_de_sante VALUES(1, 180, 70, '2023-07-11');


CREATE TABLE Compte(
    id_compte INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_client INT,
    montant DECIMAL(10,2),
    FOREIGN KEY (id_client) REFERENCES Client (id_client)
);

INSERT INTO Compte VALUES(null, 1, 25000);

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

INSERT INTO Code VALUES(null, '1234567', 80000);
INSERT INTO Code VALUES(null, '1234', 50000);
INSERT INTO Code VALUES(null, '7654321', 90000);

CREATE TABLE Demande_code(
    id_code INT,
    id_client INT,
    dates TIMESTAMP,
    etat INT,
    FOREIGN KEY (id_code) REFERENCES Code (id_code),
    FOREIGN KEY (id_client) REFERENCES Client (id_client)
);

INSERT INTO Demande_code VALUES(1, 1, '2023-07-10',5);

SELECT c.id_client, dc.id_code,c.nom,c.prenom,dc.dates,dc.etat
FROM client as c 
JOIN Demande_code as dc 
ON dc.id_client=c.id_client;

-------------------------------- ALIMENTAIRE-----------------------------------------------------

CREATE TABLE Regime_Alimentaire(
    id_regime_Alime INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255),
    action INT,
    valeur DECIMAL(10,2),
    duree INT,
    prix DECIMAL(10,2)
);

INSERT INTO Regime_Alimentaire VALUES(null, "Regime Mampihena", -1, 0.2, 1, 15000);
INSERT INTO Regime_Alimentaire VALUES(null, "Regime Mampitombo", 1, 0.1, 1, 10000);
INSERT INTO Regime_Alimentaire VALUES(null, "Regime Mampitombo", 1, 0.3, 1, 20000);

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
    id_Resistance INT not null,
    id_Dessert INT not null,
    nom_repas VARCHAR(50),
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

CREATE TABLE RegimeMenu(
    id_reg_menu INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_reg_alime int REFERENCES Regime_Alimentaire(id_regime_alime),
    id_menu int REFERENCES Menu(id_menu)
);

----------------------------------------SPORTIVE-----------------------------------------------
CREATE TABLE Regime_sportive(
    id_regime_sport INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(255),
    action INT,
    valeur DECIMAL(10,2)
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

INSERT INTO objectif VALUES();

-------------------------------------BACK-OFFICE----------------------------------------------

CREATE TABLE Admin(
    id_admin INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    mdp VARCHAR(255)
);
INSERT INTO Admin VALUES(default, '8cb2237d0679ca88db6464eac60da96345513964');

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
INSERT INTO Caisse VALUES(1, 10000);

INSERT INTO Mvt_Caisse VALUES(null,1,5000,2000,'2023-07-07');
INSERT INTO Mvt_Caisse VALUES(null,1,0,1500,'2023-07-08');
INSERT INTO Mvt_Caisse VALUES(null,1,1500,500,'2023-07-09');
INSERT INTO Mvt_Caisse VALUES(null,1,3000,0,'2023-07-10');
INSERT INTO Mvt_Caisse VALUES(null,1,1000,0,'2023-07-10');

SELECT *,(benefice - depense) as revenu
FROM Mvt_Caisse 
WHERE benefice > depense;

SELECT id_caisse,SUM(benefice) as benefice,dates FROM Mvt_Caisse GROUP BY id_caisse,dates;
SELECT id_caisse,SUM(depense) as depenses,dates FROM Mvt_Caisse GROUP BY id_caisse,dates;
SELECT * FROM Mvt_Caisse;

SELECT *,(depense - benefice) as depense
FROM Mvt_Caisse 
WHERE benefice < depense;


SELECT c.id_client, dc.id_code,c.nom,c.prenom,dc.dates,dc.etat
FROM Client as c
JOIN Demande_code as dc
ON c.id_client=c.id_client;

