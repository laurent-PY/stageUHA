<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8"/>
    <meta name="author" content="Laurent">
    <meta name="description" content="Example description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript" src=""></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php if(isset($_POST['t'])){
            $t = $_POST['t'];}
        echo $t;
        ?></title>
</head>
<body>
<div class="fixed-top divNavBar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-item nav-link active" href="http://localhost/StageUHA/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <?php if(!isset($_SESSION['email'])) {
                            ?>
                            <a class="nav-item nav-link" href="http://localhost/StageUHA/membre">S'inscrire</a>
                            <?php
                        }?>
                    </li>
                    <li class="nav-item">
                        <?php if(isset($_SESSION['email'])) {
                            ?>
                            <a class="nav-item nav-link" href="http://localhost/StageUHA/logout">D??connexion</a>
                            <?php
                        }else
                        { ?>
                            <a class="nav-item nav-link" href="http://localhost/StageUHA/login">Connexion</a>
                        <?php } ?>
                    </li>
                    <li class="nav-item">
                        <?php if(isset($_SESSION['email'])) {
                            ?>
                            <a class="nav-item nav-link" href="">Mon Compte</a>
                            <?php
                        }?>
                    </li>
                    <li class="nav-item">
                        <?php
                        if(isset($_SESSION['status'])){
                            if($_SESSION['status'] == 'admin'){
                                ?>
                                <a class="nav-item nav-link" href="">Administration membres & activit??es</a>
                                <?php
                            }
                        }?>
                    </li>
                    <li class="nav-item">
                        <?php if(isset($_SESSION['status'])){
                            if($_SESSION['status'] == 'organisateur'){
                                ?>
                                <a class="nav-item nav-link" href="http://localhost/StageUHA/Activite">Ajouter une activit??e</a>
                                <?php
                            }
                        }?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link"><?php if(isset($_SESSION['email'])){?> Bonjour, <?= $_SESSION['prenom'] ?><?php } ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<img class="logoTemplate" src="assets/img/logo.png" alt="" width="400px">

<div class="mainPos">
    <main>
        <div class="container mainFlex">
            <?php if(isset($_POST['content'])){
                $content = $_POST['content'];}
            echo $content;
            ?>
        </div>
    </main>
</div>
<div class="divFooter fixed-bottom">
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            ?? 2020 Copyright : <a class="text-dark" href="#">L4urentTest.com</a>
        </div>
    </footer>
</div>
<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
<script src="/docs/5.0/assets/js/docs.min.js"></script>
</body>

</html>