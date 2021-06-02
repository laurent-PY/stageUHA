#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: activite
#------------------------------------------------------------

CREATE TABLE activite(
                         idActivite   Int  Auto_increment  NOT NULL ,
                         typeActivite Varchar (30) NOT NULL ,
                         urlPhoto     Varchar (150) NOT NULL ,
                         intitule     Varchar (150) NOT NULL ,
                         description  Varchar (255) NOT NULL ,
                         tarif        Float NOT NULL ,
                         dateDebut    Date NOT NULL ,
                         dateFin      Date NOT NULL ,
                         organisateur Varchar (50) NOT NULL ,
                         urlZoom      Varchar (50) NOT NULL
    ,CONSTRAINT activite_PK PRIMARY KEY (idActivite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: membre
#------------------------------------------------------------

CREATE TABLE membre(
                       idMembre      Int  Auto_increment  NOT NULL ,
                       nom           Varchar (150) NOT NULL ,
                       prenom        Varchar (150) NOT NULL ,
                       email         Varchar (150) NOT NULL ,
                       pass          Text NOT NULL ,
                       dateNaissance Date NOT NULL ,
                       adresse       Varchar (50) NOT NULL ,
                       nomVille      Varchar (150) NOT NULL ,
                       cpVille       Varchar (5) NOT NULL ,
                       pays          Varchar (150) NOT NULL ,
                       telPortable   Varchar (10) NOT NULL ,
                       telFixe       Varchar (10) NOT NULL ,
                       status        Varchar (50)
    ,CONSTRAINT membre_PK PRIMARY KEY (idMembre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: atelier
#------------------------------------------------------------

CREATE TABLE atelier(
                        idAtelier   Int  Auto_increment  NOT NULL ,
                        intitule    Varchar (150) NOT NULL ,
                        description Varchar (255) NOT NULL ,
                        date        Date NOT NULL ,
                        idActivite  Int NOT NULL
    ,CONSTRAINT atelier_PK PRIMARY KEY (idAtelier)

    ,CONSTRAINT atelier_activite_FK FOREIGN KEY (idActivite) REFERENCES activite(idActivite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reglement
#------------------------------------------------------------

CREATE TABLE reglement(
                          idReglement   Int  Auto_increment  NOT NULL ,
                          libelle       Varchar (50) NOT NULL ,
                          montant       Int NOT NULL ,
                          dateReglement Date NOT NULL ,
                          typeReglement Varchar (5) NOT NULL
    ,CONSTRAINT reglement_PK PRIMARY KEY (idReglement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: organisateur
#------------------------------------------------------------

CREATE TABLE organisateur(
                             idOrganisateur Int  Auto_increment  NOT NULL ,
                             nom            Varchar (30) NOT NULL ,
                             prenom         Varchar (30) NOT NULL
    ,CONSTRAINT organisateur_PK PRIMARY KEY (idOrganisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participer
#------------------------------------------------------------

CREATE TABLE participer(
                           idAtelier Int NOT NULL ,
                           idMembre  Int NOT NULL
    ,CONSTRAINT participer_PK PRIMARY KEY (idAtelier,idMembre)

    ,CONSTRAINT participer_atelier_FK FOREIGN KEY (idAtelier) REFERENCES atelier(idAtelier)
    ,CONSTRAINT participer_membre0_FK FOREIGN KEY (idMembre) REFERENCES membre(idMembre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: suit
#------------------------------------------------------------

CREATE TABLE suit(
                     idActivite Int NOT NULL ,
                     idMembre   Int NOT NULL
    ,CONSTRAINT suit_PK PRIMARY KEY (idActivite,idMembre)

    ,CONSTRAINT suit_activite_FK FOREIGN KEY (idActivite) REFERENCES activite(idActivite)
    ,CONSTRAINT suit_membre0_FK FOREIGN KEY (idMembre) REFERENCES membre(idMembre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: genere
#------------------------------------------------------------

CREATE TABLE genere(
                       idReglement Int NOT NULL ,
                       idActivite  Int NOT NULL
    ,CONSTRAINT genere_PK PRIMARY KEY (idReglement,idActivite)

    ,CONSTRAINT genere_reglement_FK FOREIGN KEY (idReglement) REFERENCES reglement(idReglement)
    ,CONSTRAINT genere_activite0_FK FOREIGN KEY (idActivite) REFERENCES activite(idActivite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: organiser
#------------------------------------------------------------

CREATE TABLE organiser(
                          idOrganisateur Int NOT NULL ,
                          idActivite     Int NOT NULL
    ,CONSTRAINT organiser_PK PRIMARY KEY (idOrganisateur,idActivite)

    ,CONSTRAINT organiser_organisateur_FK FOREIGN KEY (idOrganisateur) REFERENCES organisateur(idOrganisateur)
    ,CONSTRAINT organiser_activite0_FK FOREIGN KEY (idActivite) REFERENCES activite(idActivite)
)ENGINE=InnoDB;

