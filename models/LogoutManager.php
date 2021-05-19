<?php
class LogoutManager extends Model
{
    public function getLogout()
    {
        return $this->getAll('membre', 'Membre');
    }

    public static function logout(){
        session_start();
        session_unset();
        session_destroy();
        header("location:accueil");
    }

}