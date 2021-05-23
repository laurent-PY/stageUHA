<?php

class AccueilManager extends Model
{
    public function getAccueils()
    {
        return $this->getAll('activite', 'Activite');
    }
}