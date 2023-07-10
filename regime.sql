create database regime;

use regime;


-----------------------------------FRONT-OFFICE-----------------------------------
create table Client(
    id_client int int not null primary key auto_increment,
    nom varchar,
    prenom varchar,
    date_de_naissance date,
    genre varchar,
    taille decimal(10,2),
    email varchar,
    mdp varchar
);

create table compte(
    id_compte int not null primary key auto_increment,
    id_client int,
    montant decimal(10,2),
    FOREIGN KEY (id_client) REFERENCES client (id_client)
);

create table Mvt_compte(
    id_mvt int not null primary key auto_increment,
    id_compte int,
    benefice decimal(10,2),
    depense decimal(10,2),
    dates date,
    FOREIGN KEY (id_compte) REFERENCES compte (id_compte)
);

create table code(
    id_code int not null primary key auto_increment,
    code varchar,
    valeur decimal(10,2)
);

create table demande_code(
    id_code int,
    id_client int,
    FOREIGN KEY (id_code) REFERENCES code (id_code),
    FOREIGN KEY (id_client) REFERENCES client (id_client)
);

-------------------------------- ALIMENTAIRE-----------------------------------------------------

create table Regime_Alimentaire(
    id_regime_Alime int not null primary key auto_increment,
    libelle varchar,
    action int,
    valeur decimal(10,2),
    duree int,
);

create table plat(
    id_plat int not null pri key auto_increment,
    nom varchar,
    categorie int,
    calorie decimal(10,2)
);

create table repas(
    id_repas int not null primary key auto_increment,
    types int,
    id_Entrer int,
    id_Resistance int,
    id_Dessert int,
    FOREIGN KEY (id_Entrer) REFERENCES plat (id_plat),
    FOREIGN KEY (id_Resistance) REFERENCES plat (id_plat),
    FOREIGN KEY (id_Dessert) REFERENCES plat (id_plat)
);

create table Menu(
    id_menu int not null primary key auto_increment,
    libelle varchar,
    id_Pdeg int,
    id_Deg int,
    id_diner int,
    FOREIGN KEY (id_Pdeg) REFERENCES repas (id_repas),
    FOREIGN KEY (id_Deg) REFERENCES repas (id_repas),
    FOREIGN KEY (id_diner) REFERENCES repas (id_repas)
);

----------------------------------------SPORTIVE-----------------------------------------------
create table regime_sportive(
    id_regime_sport not null primary key auto_increment,
    libelle varchar,
    action int,
    valeur decimal(10,2),
    duree_Jour int
);

create table mvt_physique(
    id_mvt int not null auto_increment,
    nom varchar
);

create table sport(
    id_regime_sport int,
    id_mvt int,
    duree int,
    FOREIGN KEY (id_regime_sport) REFERENCES regime_sportive (id_regime_sport),
    FOREIGN KEY (id_mvt) REFERENCES mvt_physique (id_mvt)
);

----------------------------------------OBJECTIF---------------------------------------------
create table objectif(
    id_objectif int not null primary key auto_increment,
    id_client int,
    poid_final decimal(10,2),
    date_debut date,
    date_fin date,
    id_regime_Alime int,
    id_regime_sport int,
    FOREIGN KEY (id_regime_Alime) REFERENCES Regime_Alimentaire (id_regime_Alime),
    FOREIGN KEY (id_regime_sport) REFERENCES regime_sportive (id_regime_sport),    
);

create table historique_poid(
    id_client int,
    poids decimal(10,2),
    dates date,
    FOREIGN KEY (id_client) REFERENCES client (id_client),
);

-------------------------------------BACK-OFFICE----------------------------------------------

create table Admin(
    id_admin int not null primary key auto_increment,
    mdp varchar
);

create table caise(
    id_caisse int not null primary key auto_increment,
    montant decimal(10,2)
);
create table mvt_Caisse(
    id_mvt_caisse int not null auto_increment,
    id_caisse int,
    benefice decimal(10,2),
    depense decimal(10,2),
    dates date
);

