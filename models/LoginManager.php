<?php


class LoginManager extends Model
{
    public function getLogin()
    {
        return $this->getAll('membre', 'Membre');
    }
}