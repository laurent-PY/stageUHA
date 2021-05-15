<?php

class MembreManager extends Model
{
    public function getMembres()
    {
        return $this->getAll('membre', 'Membre');
    }

    public static function insertMembre(Membre $newMembre)
    {
        var_dump($newMembre);

        //TODO a terminer requete insert dans la base de l'objet.
    }
}