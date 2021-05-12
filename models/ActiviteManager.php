<?php

class ActiviteManager extends Model
{
    public function getActivites()
    {
        return $this->getAll('activite', 'Activite');
    }
}