<?php $this->_t = 'Accueil MVC';
if(isset($_POST['activites'])){
    $activites = $_POST['activites'];
}
?>

<div class="blockContent">
    <?php foreach($activites as $activite): ?>
        <div class="blockContent">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 15vw;height: 70vh;margin: 15px" >
                        <img src="<?= $activite->getUrlPhoto() ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $activite->getIntitule() ?></h5>
                            <p class="card-text"><?= $activite->getTypeActivite() ?></p>
                            <p class="card-text"><?= $activite->getDescription() ?></p>
                            <p class="card-text"><?= $activite->getTarif() ?> Euros (TTC)</p>
                            <p class="card-text"><?= $activite->getDateDebut() ?></p>
                            <p class="card-text"><?= $activite->getDatefin() ?></p>
                            <p class="card-text"><?= $activite->getOrganisateur() ?></p>
                            <a href="#" class="btn btn-primary">Consultez l'activité</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

