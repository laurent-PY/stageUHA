<?php
include_once('./models/ActiviteManager.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$this->_t = 'Accueil MVC';
?>

<div class="container">
    <div class="titre">
        <h1 >Catalogue des séminaires et conférence disponibles</h1>
    </div>
    <div class="blockContent">
        <?php
            $newActivites = new Activite();
            $accueils = ActiviteManager::getActivite();

        foreach($accueils as $accueil): ?>
            <div class="blockContent">
                <div class="row">
                    <div class="card" style="width: 15vw;height: 70vh;margin: 15px" >
                        <img src="<?= $accueil['urlPhoto'] ?>" class="card-img-top" style="margin-top: 10px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $accueil['typeActivite'] ?></h5>
                            <p class="card-text"><?= $accueil['intitule'] ?></p>
                            <p class="card-text"><?= $accueil['description']?></p>
                            <p class="card-text"><?= $accueil['tarif']?> Euros (TTC)</p>
                            <p class="card-text"><?= $accueil['dateDebut'] ?></p>
                            <p class="card-text"><?= $accueil['dateFin'] ?></p>
                            <?php if(isset($_SESSION['email'])) {
                                ?>
                                <a href="#" class="btmCard btn btn-outline-secondary ">Participer</a>
                                <?php
                            }else
                            { ?>
                                <a href="#" class="btmCard btn btn-outline-secondary ">Consulter</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
