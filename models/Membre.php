<?php

class Membre
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_password;
    private $_dateNaissance;
    private $_adresse;
    private $_nomVille;
    private $_cpVille;
    private $_pays;
    private $_telPortable;
    private $_telFixe;

    //constructeur
    public function __construct()
    {
      
    }
   

    public function getId(){return $this->_id;}

    public function getNom(){return $this->_nom;}
    public function setNom($nom){$this->_nom = $nom;}

    public function getPrenom(){return $this->_prenom;}
    public function setPrenom($prenom){$this->_prenom = $prenom;}

    public function getEmail(){return $this->_email;}
    public function setEmail($email){$this->_email = $email;}

    public function getPassword(){return $this->_password;}
    public function setPassword($password){$this->_password = $password;}

    public function getDateNaissance(){return $this->_dateNaissance;}
    public function setDateNaissance($dateNaissance){$this->_dateNaissance = $dateNaissance;}

    public function getAdresse(){return $this->_adresse;}
    public function setAdresse($adresse){$this->_adresse = $adresse;}

    public function getNomVille(){return $this->_nomVille;}
    public function setNomVille($nomVille){$this->_nomVille = $nomVille;}
    
    public function getCpVille(){return $this->_cpVille;}
    public function setCpVille($cpVille){$this->_cpVille = $cpVille;}
    
    public function getPays(){return $this->_pays;}
    public function setPays($pays){$this->_pays = $pays;}
    
    public function getTelPortable(){return $this->_telPortable;}
    public function setTelPortable($telPortable){$this->_telPortable = $telPortable;}
    
    public function getTelFixe(){return $this->_telFixe;}
    public function setTelFixe($telFixe){$this->_telFixe = $telFixe;}
}