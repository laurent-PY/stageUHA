<?php $this->_t = 'Register';
include_once('./models/MembreManager.php');

// TODO terminer le contrôle des champs, essayer de faire passer par la methode dans MembreManager::chekFields()

if(isset($_POST['register'])) {
    $newMembre = new Membre();
    $newMembre->setNom($_POST['nom']);
    $newMembre->setPrenom($_POST['prenom']);
    $newMembre->setEmail($_POST['mail']);
    $newMembre->setPass($_POST['pass']);
    $newMembre->setCheckPass($_POST['checkPass']);
    $newMembre->setDateNaissance($_POST['dateNaissance']);
    $newMembre->setAdresse($_POST['adresse']);
    $newMembre->setNomVille($_POST['nomVille']);
    $newMembre->setCpVille($_POST['cpVille']);
    $newMembre->setPays($_POST['pays']);
    $newMembre->setTelPortable($_POST['telPortable']);
    $newMembre->setTelFixe($_POST['telFixe']);

    if(MembreManager::chekFields($newMembre) == false){
        ?>
        <div class="alert alert-danger" role="alert" style="height: 7vh">
            Tous les champs doivent être remplis !
        </div>
        <?php
    }elseif(MembreManager::checkPasssword($newMembre) == false){
        ?>
        <div class="alert alert-warning" role="alert" style="height: 7vh" >
            Les mots de passes ne correspondent pas.
        </div>
        <?php
    }
    else{
        MembreManager::insertMembre($newMembre);
        ?>
        <div class="alert alert-success" role="alert" style="height: 7vh" >
            L'utilisateur à été ajouté.
        </div>
        <?php
    }


}
?>

<form method="post">
    <?php


    ?>
    <!-- 2 column grid layout with text inputs for the first and last names -->    <div class="row mb-4">
        <div class="col">
        <div class="form-outline">
            <input type="text" id="nom" name="nom" class="form-control" value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>" />
            <label class="form-label" for="nom">Nom*</label>
        </div>
        </div>
        <div class="col">
        <div class="form-outline">
            <input type="text" id="prenom" name="prenom" class="form-control" value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>"/>
            <label class="form-label" for="prenom">Prenom*</label>
        </div>
        </div>
    </div>
    
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="email" id="mail" name="mail" class="form-control" value="<?php if (isset($_POST['mail'])){echo $_POST['mail'];} ?>"/>
        <label class="form-label" for="mail">E-mail*</label>
    </div>

    <!-- password input -->
    <div class="form-outline mb-4">
        <input type="password" id="pass" name="pass" class="form-control"/>
        <label class="form-label" for="pass">Mot de passe*</label>
    </div>

    <!-- verify password input -->
    <div class="form-outline mb-4">
        <input type="password" id="checkPass" name="checkPass" class="form-control"/>
        <label class="form-label" for="checkPass">Verification de mot de passe*</label>
    </div>

    <!-- date de naissance input -->
    <div class="form-outline mb-4">
        <input type="date" id="dateNaissance" name="dateNaissance" class="form-control" value="<?php if (isset($_POST['dateNaissance'])){echo $_POST['dateNaissance'];} ?>"/>
        <label class="form-label" for="dateNaissance">Date de naissance*</label>
    </div>

    <!-- adresse input -->
    <div class="form-outline">
        <input type="text" id="adresse" name="adresse" class="form-control" value="<?php if (isset($_POST['adresse'])){echo $_POST['adresse'];} ?>"/>
        <label class="form-label" for="adresse">Adresse*</label>
    </div>

    <!-- ville input -->
    <div class="form-outline">
        <input type="text" id="nomVille" name="nomVille" class="form-control" value="<?php if (isset($_POST['nomVille'])){echo $_POST['nomVille'];} ?>"/>
        <label class="form-label" for="nomVille">Ville*</label>
    </div>

    <!-- cp ville input -->
    <div class="form-outline">
        <input type="text" id="cpVille" name="cpVille" class="form-control" value="<?php if (isset($_POST['cpVille'])){echo $_POST['cpVille'];} ?>"/>
        <label class="form-label" for="cpVille">Code postal*</label>
    </div>

    <!-- pays input -->
    <div class="form-outline">
        <input type="text" id="pays" name="pays" class="form-control" value="<?php if (isset($_POST['pays'])){echo $_POST['pays'];} ?>"/>
        <label class="form-label" for="pays">Pays*</label>
    </div>

    <!-- tel Portable input -->
    <div class="form-outline">
        <input type="number" id="telPortable" name="telPortable" class="form-control" value="<?php if (isset($_POST['telPortable'])){echo $_POST['telPortable'];} ?>"/>
        <label class="form-label" for="telPortable">Téléphone portable</label>
    </div>

    <!-- tel fixe input -->
    <div class="form-outline">
        <input type="number" id="telFixe" name="telFixe" class="form-control" value="<?php if (isset($_POST['telFixe'])){echo $_POST['telFixe'];} ?>"/>
        <label class="form-label" for="telFixe">Téléphone fixe</label>
    </div>


    <!-- Submit button -->
    <input type="submit" class="tn btn-primary btn-block mb-4" name="register" value="S'inscrire">
    </form>

