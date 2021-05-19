<?php


class LoginManager extends Model
{
    public function getLogin()
    {
        return $this->getAll('membre', 'Membre');
    }


    public static function checkLogin($membre){
        $bdd = Model::getBdd();
        $email = $membre->getEmail();
        $pass = $membre->getPass();
        $requete = $bdd -> prepare("SELECT * FROM membre WHERE email = ? AND pass = PASSWORD(?)");
        $requete->execute(array($email, $pass));

        if ($requete -> rowCount() > 0) {
            $requete->fetch();
            session_start();
            $_SESSION["id"] = $membre->getId();
            $_SESSION["email"] = $membre->getEmail();
            return true;
        }else
            return false;
    }
}

