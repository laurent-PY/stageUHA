<?php $this->_t = 'Accueil MVC';
foreach($activites as $activite): ?>
    <div class="card" style="width: 18rem;">
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
<?php endforeach; ?>