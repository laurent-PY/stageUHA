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

        //TODO a terminer req insert dans la base de l'objet.
    }
}