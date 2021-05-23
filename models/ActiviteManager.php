<?php


class ActiviteManager extends Model
{
    public function getActivites()
    {
        return $this->getAll('activite', 'Activite');
    }

    public static function insertActivite(Activite $newEvenement){

        $typeActivite = $newEvenement->getTypeActivite();
        $urlPhoto = $newEvenement->getUrlPhoto();
        $intitule = $newEvenement->getIntitule();
        $description = $newEvenement->getDescription();
        $tarif = $newEvenement->getTarif();
        $dateDebut = $newEvenement->getDateDebut();
        $dateFin = $newEvenement->getDateFin();
//        var_dump($intitule);
//        die();

        $bdd = Model::getBdd();

        $requete = $bdd->prepare("INSERT INTO activite(typeActivite, urlPhoto, intitule, description, tarif, dateDebut, dateFin) VALUES (?, ?, ?, ?, ?, ?, ?)");


        $requete -> execute(array(
            $typeActivite,
            $urlPhoto,
            $intitule,
            $description,
            $tarif,
            $dateDebut,
            $dateFin
        ));
    }



    public static function getActivite(){
        $bdd = Model::getBdd();
        $requete = $bdd->prepare("SELECT * FROM activite");
        $requete->execute();
        $lignes = $requete->fetchAll((PDO::FETCH_ASSOC));
        return $lignes;
    }

}