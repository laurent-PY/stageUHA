<?php $this->_t = 'Register';
include_once('./models/MembreManager.php');

// TODO terminer le contrôle des champs, essayer de faire passer par le methode dans MembreManager::chekFields()
if(empty($_POST['nom']))
{
    echo'Remplir tout les champs SVP';
}else
{
    if(isset($_POST['register'])){
    $newMembre = new Membre();
    $newMembre->setNom($_POST['nom']);
    $newMembre->setPrenom($_POST['prenom']);
    $newMembre->setEmail($_POST['mail']);
    $newMembre->setPass($_POST['pass']);
    $newMembre->setDateNaissance($_POST['dateDeNaissance']);
    $newMembre->setAdresse($_POST['adresse']);
    $newMembre->setNomVille($_POST['nomVille']);
    $newMembre->setCpVille($_POST['cpVille']);
    $newMembre->setPays($_POST['pays']);
    $newMembre->setTelPortable($_POST['telPortable']);
    $newMembre->setTelFixe($_POST['telFixe']);
    MembreManager::insertMembre($newMembre);
};
}



?>
    <form method="post">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
        <div class="form-outline">
            <input type="text" id="nom" name="nom" class="form-control" />
            <label class="form-label" for="nom">Nom</label>
        </div>
        </div>
        <div class="col">
        <div class="form-outline">
            <input type="text" id="prenom" name="prenom" class="form-control" />
            <label class="form-label" for="prenom">Prenom</label>
        </div>
        </div>
    </div>
    
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" id="mail" name="mail" class="form-control" />
        <label class="form-label" for="mail">E-mail</label>
    </div>

    <!-- password input -->
    <div class="form-outline mb-4">
        <input type="password" id="pass" name="pass" class="form-control" />
        <label class="form-label" for="pass">Mot de passe</label>
    </div>

    <!-- verify password input -->
    <div class="form-outline mb-4">
        <input type="password" id="checkPassword" name="checkPassword" class="form-control" />
        <label class="form-label" for="checkPassword">Verification de mot de passe</label>
    </div>

    <!-- date de naissance input -->
    <div class="form-outline mb-4">
        <input type="date" id="dateDeNaissance" name="dateDeNaissance" class="form-control" />
        <label class="form-label" for="dateDeNaissance">Date de naissance</label>
    </div>

    <!-- adresse input -->
    <div class="form-outline">
        <input type="text" id="adresse" name="adresse" class="form-control" />
        <label class="form-label" for="adresse">Adresse</label>
    </div>

    <!-- ville input -->
    <div class="form-outline">
        <input type="text" id="nomVille" name="nomVille" class="form-control" />
        <label class="form-label" for="nomVille">Ville</label>
    </div>

    <!-- cp ville input -->
    <div class="form-outline">
        <input type="text" id="cpVille" name="cpVille" class="form-control" />
        <label class="form-label" for="cpVille">Code postal</label>
    </div>

    <!-- pays input -->
    <div class="form-outline">
        <input type="text" id="pays" name="pays" class="form-control" />
        <label class="form-label" for="pays">Pays</label>
    </div>

    <!-- tel Portable input -->
    <div class="form-outline">
        <input type="number" id="telPortable" name="telPortable" class="form-control" />
        <label class="form-label" for="telPortable">Téléphone portable</label>
    </div>

    <!-- tel fixe input -->
    <div class="form-outline">
        <input type="number" id="telFixe" name="telFixe" class="form-control" />
        <label class="form-label" for="telFixe">Téléphone fixe</label>
    </div>


    <!-- Submit button -->
    <input type="submit" class="tn btn-primary btn-block mb-4" name="register" value="S'inscrire">
    </form>

