<?php


class DetailManager extends Model
{
    public function getDetail()
    {
        return $this->getAll('activite', 'Activite');
    }

    public static function detail($id){

        $bdd = Model::getBdd();
        $requete = $bdd->prepare("SELECT * FROM activite WHERE idActivite = ?");
        $requete->execute(array(
            $id
        ));
        $lignes = $requete->fetchAll((PDO::FETCH_ASSOC));
        return $lignes;

    }

}