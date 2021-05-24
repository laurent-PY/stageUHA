<?php

class Activite
{
    private $_idActivite;
    private $_typeActivite;
    private $_urlPhoto;
    private $_intitule;
    private $_description;
    private $_tarif;
    private $_dateDebut;
    private $_dateFin;
    private $_organisateur;
    private $_urlZoom;





    //constructeur
    public function __construct()
    {

    }


    
    public function getIdActivite(){return $this->_idActivite;}
    
    public function getTypeActivite(){return $this->_typeActivite;}
    public function setTypeActivite($typeActivite){$this->_typeActivite = $typeActivite;}
    
    public function getUrlPhoto(){return $this->_urlPhoto;}
    public function setUrlPhoto($urlPhoto){$this->_urlPhoto = $urlPhoto;}
    
    public function getIntitule(){return $this->_intitule;}
    public function setIntitule($intitule){$this->_intitule = $intitule;}
    
    public function getDescription(){return $this->_description;}
    public function setDescription($description){$this->_description = $description;}
    
    public function getTarif(){return $this->_tarif;}
    public function setTarif($tarif){$this->_tarif = $tarif;}
    
    public function getDateDebut(){return $this->_dateDebut;}
    public function setDateDebut($dateDebut){$this->_dateDebut = $dateDebut;}
    
    public function getDateFin(){return $this->_dateFin;}
    public function setDateFin($dateFin){$this->_dateFin = $dateFin;}
    
    public function getOrganisateur(){return $this->_organisateur;}
    public function setOrganisateur($organisateur){$this->_organisateur = $organisateur;}

    public function getUrlZoom(){return $this->_urlZoom;}
    public function setUrlZoom($urlZoom){ $this->_urlZoom = $urlZoom;}
}