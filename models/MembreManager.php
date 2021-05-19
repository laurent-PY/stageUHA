<?php

class MembreManager extends Model
{
    public function getMembres()
    {
        return $this->getAll('membre', 'Membre');
    }

    public static function insertMembre(Membre $newMembre)
    {

        $nom = $newMembre->getNom();
        $prenom = $newMembre->getPrenom();
        $email = $newMembre->getEmail();
        $pass = $newMembre->getPass();
        $dateNaissance = $newMembre->getDateNaissance();
        $adresse = $newMembre->getAdresse();
        $nomVille = $newMembre->getNomVille();
        $cpVille = $newMembre->getCpVille();
        $pays = $newMembre->getPays();
        $telPortable = $newMembre->getTelPortable();
        $telFixe = $newMembre->getTelFixe();
        $organisateur = $newMembre->getOrganisateur();
        $bdd = Model::getBdd();
        $requete = $bdd->prepare("INSERT INTO membre(nom, prenom, email, pass, dateNaissance, adresse, nomVille, cpVille, pays, telportable, telfixe, organisateur ) VALUES (?, ?, ?, PASSWORD(?), ?, ?, ?, ?, ?, ?, ?, ?)");

        $requete -> execute(array(
            $nom,
            $prenom,
            $email,
            $pass,
            $dateNaissance,
            $adresse,
            $nomVille,
            $cpVille,
            $pays,
            $telPortable,
            $telFixe,
            $organisateur
        ));

        header("location:accueil");
    }

    public static function chekFields(Membre $newMembre)
    {
        if($newMembre->getNom() == "" ||
            $newMembre->getPrenom() == "" ||
            $newMembre->getEmail() == "" ||
            $newMembre->getPrenom() == "" ||
            $newMembre->getPass() == "" ||
            $newMembre->getDateNaissance() == "" ||
            $newMembre->getAdresse() == "" ||
            $newMembre->getNomVille() == "" ||
            $newMembre->getCpVille() == "" ||
            $newMembre->getPays() == "" )
        {
            return false;
        }else{
            return true;
        }
    }

    public static function checkPasssword(Membre $newMembre){

        if($newMembre->getPass() != $newMembre->getCheckPass()){
            return false;
        }
        return true;
    }

    public static function checkMail(Membre $newMembre)
    {
        $bdd = Model::getBdd();
        $requete = $bdd->prepare('SELECT COUNT(*) FROM membre WHERE email = '. '"' . $newMembre->getEmail() . '"');
        $requete->execute();
        $row = $requete->fetch();
        if($row[0] > 0){
            return true;
        }else{
            return false;
        }
    }
}