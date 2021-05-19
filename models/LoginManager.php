<?php
class LoginManager extends Model
{
    public function getLogin()
    {
        return $this->getAll('membre', 'Membre');
    }


    public static function checkLogin(Membre $membre)
    {
        $bdd = Model::getBdd();
        $email = $membre->getEmail();
        $pass = $membre->getPass();
        $requete = $bdd->prepare("SELECT * FROM membre WHERE email = ? AND pass = PASSWORD(?)");
        $requete->execute(array(
            $email, $pass));

        if ($requete->rowCount() > 0) {
            $rows = $requete->fetchall(PDO::FETCH_ASSOC);

            foreach ($rows as $row) {
                $email = $row["email"];
            }
            session_start();
            $_SESSION['email'] = $email;

            header("location:accueil");
        }
    }
}


