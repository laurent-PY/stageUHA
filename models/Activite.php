<?php
class Activite extends Model{

    public function __construct(){
        $this->table = "activite";
        $this->getConnexion();
    }
}