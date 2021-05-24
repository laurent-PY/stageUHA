<?php
include_once('./models/ActiviteManager.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$this->_t = 'Créer un évenement';
if(isset($_POST['enregistrer'])) {
    $newEvenement = new Activite();
    $newEvenement->setTypeActivite($_POST['typeActivite']);

    if (isset($_POST['picture01'])){
        if($_POST['picture01'])
        {
            $newEvenement->setUrlPhoto('./assets/img/01.jpg');
        }
    }
    if (isset($_POST['picture02'])){
        if($_POST['picture02'])
        {
            $newEvenement->setUrlPhoto('./assets/img/02.jpg');
        }
    }
    if (isset($_POST['picture03'])){
        if($_POST['picture03'])
        {
            $newEvenement->setUrlPhoto('./assets/img/03.jpg');
        }
    }
    if (isset($_POST['picture04'])){
        if($_POST['picture04'])
        {
            $newEvenement->setUrlPhoto('./assets/img/04.jpg');
        }
    }
    if (isset($_POST['picture05'])){
        if($_POST['picture05'])
        {
            $newEvenement->setUrlPhoto('./assets/img/05.jpg');
        }
    }
    if (isset($_POST['picture06'])){
        if($_POST['picture06'])
        {
            $newEvenement->setUrlPhoto('./assets/img/06.jpg');
        }
    }
    $newEvenement->setIntitule($_POST['intitule']);
    $newEvenement->setDescription($_POST['description']);
    $newEvenement->setTarif($_POST['tarif']);
    $newEvenement->setDateDebut($_POST['dateDebut']);
    $newEvenement->setDateFin($_POST['dateFin']);
    $newEvenement->setUrlZoom($_POST['urlZoom']);

    ActiviteManager::insertActivite($newEvenement);
}


?>

<div class="blockActivite">
    <div class="titre">
        <h1>Ajouter un événement</h1>
    </div>
    <form method="post">
        <div class="form-outline mb4">
            <label class="form-label" for="typeActivite">Type d'activité *</label>
            <select class="form-select" name="typeActivite">
                <option selected>Choix du type d'événement</option>
                <option value="Conférence">Conférence</option>
                <option value="Séminaire">Séminaire</option>
            </select>
        </div>

        <div class="form-outline mb4 ">
            <label class="form-label" for="intitule">titre *</label>
            <input type="text" name="intitule" class="form-control" value="<?php if (isset($_POST['intitule'])){echo $_POST['intitule'];} ?>"/>
        </div>

        <div class="form-outline mb4">
            <label class="form-label" for="intitule">Image *</label>
            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choisir une image...
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse mb4" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div>
                                        <img src="assets/img/01.jpg" alt="une image" style="width: 100%">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="picture01" name="picture01">
                                            <label class="form-check-label" for="01">
                                                Choix 1
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="assets/img/02.jpg" alt="une image" style="width: 100%">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="picture02" name="picture02">
                                            <label class="form-check-label" for="02">
                                                Choix 2
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="assets/img/03.jpg" alt="une image" style="width: 100%">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="picture03" name="picture03">
                                            <label class="form-check-label" for="03">
                                                Choix 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="assets/img/04.jpg" alt="une image" style="width: 100%">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="picture04" name="picture04">
                                            <label class="form-check-label" for="04">
                                                Choix 4
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="assets/img/05.jpg" alt="une image" style="width: 100%">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="picture05" name="picture05">
                                            <label class="form-check-label" for="05">
                                                Choix 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <img src="assets/img/06.jpg" alt="une image" style="width: 100%">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="picture06" name="picture06">
                                            <label class="form-check-label" for="06">
                                                Choix 6
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- description input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="description">Description *</label>
            <textarea class="form-control" name="description" rows="3" value="<?php if (isset($_POST['description'])){echo $_POST['description'];} ?>"></textarea>

        </div>

        <!-- tarif input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="pass">tarif *</label>
            <input type="number" step=0.01 name="tarif" class="form-control" value="<?php if (isset($_POST['tarif'])){echo $_POST['tarif'];} ?>"/>
        </div>

        <!-- date début input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="checkPass">Date début événement *</label>
            <input type="date" name="dateDebut" class="form-control"/>

        </div>

        <!-- dateFin input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="dateFin">Date fin événement *</label>
            <input type="date" name="dateFin" class="form-control"/>
        </div>

        <!-- urlZoom input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="urlZoom">Url zoom de la conférence *</label>
            <input class="form-control" name="urlZoom" rows="3" value="<?php if (isset($_POST['urlZoom'])){echo $_POST['urlZoom'];} ?>"/>

        </div>

        <!-- Submit button -->
        <input type="submit" class="btn btn-outline-secondary btn-block" name="enregistrer" value="publier">
    </form>
</div>
