<?php
include_once('./models/LoginManager.php');

if(isset($_POST['deconnexion'])) {
    LogoutManager::logout();
}

?>

<div class="blockLogin">
    <div class="deconnexion">
        <form method="post">
            <input type="submit" class="btn btn-outline-secondary btn-block mb-4 d-flex justify-content-center" style="margin: auto;" name="deconnexion" value="Déconnexion">
        </form>
    </div>
</div>