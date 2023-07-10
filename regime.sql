create database 

use 

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
    -----------------FK client-------------------
);

create table Mvt_compte(
    id_mvt int not null primary key auto_increment,
    id_compte int,
    benefice decimal(10,2),
    depense decimal(10,2),
    dates date,
    --------------FK id_compte-----------------
);

create table code(
    id_code int not null primary key auto_increment,
    code varchar,
    valeur decimal(10,2)
);

create table demande_code(
    id_code int,
    id_client int
    ------------FK id_code------------------
    -----------KK id_client----------------
);

create table Regime_Alimentaire(
    id_regime int not null primary key auto_increment,
    libelle varchar,
    action int,
    valeur decimal(10,2),
    duree int
);

create table objectif(
    id_objectif int not null primary key auto_increment,
    id_client int,
    poid_final decimal(10,2),
    date_debut date,
    date_fin date,
    
);