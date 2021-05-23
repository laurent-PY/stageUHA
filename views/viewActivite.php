<?php
include_once('./models/ActiviteManager.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$this->_t = 'Accueil MVC';
if(isset($_POST['enregister'])) {
    $newEvenement = new Activite();
    $newEvenement->setTypeActivite($_POST['typeActivite']);
    $newEvenement->setUrlPhoto($_POST['urlPhoto']);
    $newEvenement->setIntitule($_POST['intitule']);
    $newEvenement->setDescription($_POST['description']);
    $newEvenement->setTarif($_POST['tarif']);
    $newEvenement->setDateDebut($_POST['dateDebut']);
    $newEvenement->setDateFin($_POST['dateFin']);
    ActiviteManager::insertActivite($newEvenement);
}


?>

<div class="blockActivite">
    <div class="titre">
        <h1>Ajouter un événement</h1>
    </div>
    <form method="post">
        <div class="form-outline mb4">
            <select class="form-select" name="typeActivite">
                <option selected>Choix du type d'événement</option>
                <option value="conference">Conférence</option>
                <option value="seminaire">Séminaire</option>
            </select>
            <label class="form-label" for="typeActivite">Type d'activité *</label>
        </div>
        <div class="form-outline">
            <input type="text" name="intitule" class="form-control" value="<?php if (isset($_POST['intitule'])){echo $_POST['intitule'];} ?>"/>
            <label class="form-label" for="intitule">titre *</label>
        </div>
        <div class="form-outline">
            <input type="text" name="urlPhoto" class="form-control" value="<?php if (isset($_POST['urlPhoto'])){echo $_POST['urlPhoto'];} ?>"/>
            <label class="form-label" for="urlPhoto">urlPhoto *</label>
        </div>

        <!-- description input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" name="description" rows="3" value="<?php if (isset($_POST['description'])){echo $_POST['description'];} ?>"></textarea>
            <label class="form-label" for="description">Description *</label>
        </div>

        <!-- tarif input -->
        <div class="form-outline mb-4">
            <input type="number" step=0.01 name="tarif" class="form-control" value="<?php if (isset($_POST['tarif'])){echo $_POST['tarif'];} ?>"/>
            <label class="form-label" for="pass">tarif *</label>
        </div>

        <!-- date début input -->
        <div class="form-outline mb-4">
            <input type="date" name="dateDebut" class="form-control"/>
            <label class="form-label" for="checkPass">Date début événement *</label>
        </div>

        <!-- dateFin input -->
        <div class="form-outline mb-4">
            <input type="date" name="dateFin" class="form-control"/>
            <label class="form-label" for="dateFin">Date fin événement *</label>
        </div>

        <!-- Submit button -->
        <input type="submit" class="btn btn-outline-secondary btn-block" name="enregister" value="publier">
    </form>
</div>
