<?php
include_once('./models/DetailManager.php');
include_once('./models/ActiviteManager.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$this->_t = 'Détail activité';



?>

<div class="container">
    <div class="titre">
        <h1>Détails activitées </h1>
    </div>
    <div class="row">
        <div class="card" style="width: 100%; height: 68vh; border: solid black 1px ">
            <div>

                <?php
                $id = ($_SESSION['idActivite']);
                $details = DetailManager::detail($id);
                ?>
                <div>
                    </br>
                </div>

                <h2 class="card-title"><?= $details['typeActivite'] ?></h2>
                <h3 class="card-title"><?= $details['intitule'] ?></h3>
                <p class="card-text">Déscription : </br><?= $details['description']?></p>

                <?php if(isset($_SESSION['email'])) {
                    ?>
                    <a class="btmCard btn btn-outline-secondary" href="http://localhost/StageUHA/detail">Participer</a>
                    <?php
                }else
                { ?>
                    <div class="btmCard">
                        <p>La participation à l'événement est soumise à inscription obligatoire</p>
                        <a href="http://localhost/StageUHA/membre" class="btn btn-outline-secondary ">S'inscrire</a>
                        <a href="http://localhost/StageUHA/login" class="btn btn-outline-secondary ">Connexion</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

