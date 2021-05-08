<?php
abstract class Model{
    //Information de base de données

    private $host = "localhost";
    private $db_name = "mvcStage";
    private $user_name = "root";
    private $password = "root";

    //propiété contenant la connexion

    protected $_connexion;

    //propriété contenant les informations de requete

    public $table;
    public $id;


    // le controleur principal execute les requètes primaire tel que les SELECTs.
    public function getConnexion(){
        $this->_connexion = null; // reset de la connexion(au cas où)
        try {
            $this->_connexion = new PDO('mysql:host='. $this->host . '; dbname=' . $this->db_name, $this->user_name, $this->password);
            $this->_connexion->exec('set names utf8');
        } catch (PDOException $exception) {
            echo 'Erreur de connexion : '.$exception->getMessage();
        }
    }

    public function getAll(){
        $sql = "SELECT * FROM ". $this->table;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getOne(){
        $sql = "SELECT * FROM ". $this->table ." Where id =".$this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}
