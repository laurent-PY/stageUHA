<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$this->_t = 'Accueil MVC';
if(isset($_POST['consulter'])){
    $id = $_POST['id'];
    if(DetailManager::detail($id)){
        $_SESSION['idActivite'] = $id;
        header("location:detail");
    }
}
?>
<div class="container">
    <div class="titre">
        <h1>Catalogue des séminaires et conférence disponibles</h1>
    </div>
    <div class="blockContent">
        <?php
        $accueils = ActiviteManager::getActivite();
        foreach($accueils as $accueil): ?>
            <div class="blockContent">
                <div class="row">
                    <div class="card" style="width: 15vw;height: 70vh; margin: 0 15px 0 15px" >
                        <img src="<?= $accueil['urlPhoto'] ?>" class="card-img-top" style="margin-top: 10px" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $accueil['typeActivite'] ?></h5>
                            <p class="card-text"><?= $accueil['intitule'] ?></p>
                            <?php
                            ?><p><?php $accueil['description'] = substr($accueil['description'], 0, 30);
                                echo $accueil['description']."(...)";?></p><?php
                            ?>
                            <p class="card-text"><?= $accueil['tarif']?> Euros (TTC)</p>
                            <p class="card-text"><?php $timeStamp = strtotime($accueil['dateDebut']); $dateUTC = date("d-m-Y", $timeStamp); echo $dateUTC?></p>
                            <p class="card-text"><?php $timeStamp = strtotime($accueil['dateFin']); $dateUTC = date("d-m-Y", $timeStamp); echo $dateUTC?></p>
                            <p class="card-text"><?php if(isset($_SESSION['status'])){if(($_SESSION['status'] == 'organisateur') || ($_SESSION['status'] == 'membre'))  echo $accueil['urlZoom'];} ?></p>
                            <form method="post">
                                <input name="id" type="hidden" value="<?= $accueil['idActivite']; ?>">
                                <input class="btmCard btn btn-outline-secondary" name="consulter" type="submit" value="Consulter">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
