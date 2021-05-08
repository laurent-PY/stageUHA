#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: activite
#------------------------------------------------------------

CREATE TABLE activite(
        idActivite   Int  Auto_increment  NOT NULL ,
        urlPhoto     Varchar (150) NOT NULL ,
        intitule     Varchar (150) NOT NULL ,
        description  Varchar (255) NOT NULL ,
        tarif        Float NOT NULL ,
        dateDebut    Date NOT NULL ,
        dateFin      Date NOT NULL ,
        organisateur Varchar (150) NOT NULL
	,CONSTRAINT activite_PK PRIMARY KEY (idActivite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participant
#------------------------------------------------------------

CREATE TABLE participant(
        idParticipant Int  Auto_increment  NOT NULL ,
        nom           Varchar (150) NOT NULL ,
        prenom        Varchar (150) NOT NULL ,
        email         Varchar (150) NOT NULL ,
        password      Varchar (30) NOT NULL ,
        dateNaissance Date NOT NULL ,
        numRue        Varchar (10) NOT NULL ,
        nomRue        Varchar (150) NOT NULL ,
        nomVille      Varchar (150) NOT NULL ,
        cpVille       Varchar (5) NOT NULL ,
        pays          Varchar (150) NOT NULL ,
        telPortable   Int NOT NULL ,
        telFixe       Int NOT NULL
	,CONSTRAINT participant_PK PRIMARY KEY (idParticipant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: atelier
#------------------------------------------------------------

CREATE TABLE atelier(
        idAtelier   Int  Auto_increment  NOT NULL ,
        intitule    Varchar (150) NOT NULL ,
        description Varchar (255) NOT NULL ,
        idActivite  Int NOT NULL
	,CONSTRAINT atelier_PK PRIMARY KEY (idAtelier)

	,CONSTRAINT atelier_activite_FK FOREIGN KEY (idActivite) REFERENCES activite(idActivite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reglement
#------------------------------------------------------------

CREATE TABLE reglement(
        idReglement Int  Auto_increment  NOT NULL ,
        libelle     Varchar (50) NOT NULL
	,CONSTRAINT reglement_PK PRIMARY KEY (idReglement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: inscription
#------------------------------------------------------------

CREATE TABLE inscription(
        idInscription Int  Auto_increment  NOT NULL ,
        dateReglement Date NOT NULL ,
        idParticipant Int NOT NULL ,
        idActivite    Int NOT NULL ,
        idReglement   Int NOT NULL
	,CONSTRAINT inscription_PK PRIMARY KEY (idInscription)

	,CONSTRAINT inscription_participant_FK FOREIGN KEY (idParticipant) REFERENCES participant(idParticipant)
	,CONSTRAINT inscription_activite0_FK FOREIGN KEY (idActivite) REFERENCES activite(idActivite)
	,CONSTRAINT inscription_reglement1_FK FOREIGN KEY (idReglement) REFERENCES reglement(idReglement)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participer
#------------------------------------------------------------

CREATE TABLE participer(
        idAtelier     Int NOT NULL ,
        idParticipant Int NOT NULL
	,CONSTRAINT participer_PK PRIMARY KEY (idAtelier,idParticipant)

	,CONSTRAINT participer_atelier_FK FOREIGN KEY (idAtelier) REFERENCES atelier(idAtelier)
	,CONSTRAINT participer_participant0_FK FOREIGN KEY (idParticipant) REFERENCES participant(idParticipant)
)ENGINE=InnoDB;

