<?php


class Activite
{
    private $_id;
    private $_urlPhoto;
    private $_intitule;
    private $_description;
    private $_tarif;
    private $_dateDebut;
    private $_dateFin;
    private $_organisateur;
    
    //constructeur
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    //Hydratation
    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
                $this->$method($value);
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }
    
    /**
     * @return mixed
     */
    public function getUrlPhoto()
    {
        return $this->_urlPhoto;
    }

    /**
     * @param mixed $urlPhoto
     */
    public function setUrlPhoto($urlPhoto)
    {
        $this->_urlPhoto = $urlPhoto;
    }

    /**
     * @return mixed
     */
    public function getIntitule()
    {
        return $this->_intitule;
    }

    /**
     * @param mixed $intitule
     */
    public function setIntitule($intitule)
    {
        $this->_intitule = $intitule;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getTarif()
    {
        return $this->_tarif;
    }

    /**
     * @param mixed $tarif
     */
    public function setTarif($tarif)
    {
        $this->_tarif = $tarif;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->_dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->_dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->_dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->_dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getOrganisateur()
    {
        return $this->_organisateur;
    }

    /**
     * @param mixed $organisateur
     */
    public function setOrganisateur($organisateur)
    {
        $this->_organisateur = $organisateur;
    }
}