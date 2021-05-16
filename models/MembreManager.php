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

    $bdd = Model::getBdd();

    $requete = $bdd->prepare("INSERT INTO membre(nom, prenom, email, pass, dateNaissance, adresse, nomVille, cpVille, pays, telportable, telfixe ) VALUES (?, ?, ?, PASSWORD(?), ?, ?, ?, ?, ?, ?, ?)");
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
            $telFixe
        ));       
    }

    public static function chekFields()
    {
        
    }
}