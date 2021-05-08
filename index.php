<?php
// On génère une constante qui contiendra le chemin vers index.php
define ('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require_once(ROOT.'app/Model.php'); //j'ajoute ma classe Modèle
require_once(ROOT.'app/Controller.php'); //j'ajoute mon contrôleur

// On sépare les paramétres
$params = explode('/', $_GET['p']);

// est-ce qu'un paramétre existe
// si un paramétre existe 'le premier donc [0]' je le rcupère via $params
// et je passe la première lettre en majascule(respect de la convention de nommage des classes qui débutent par une majuscule) 
if($params[0] != ""){
    $controller = ucfirst($params[0]);
    // TODO à potasser et traduire. (if ternaire)
    // je controle si un paramétre est passé à l'action(appel de methode) si rien n'est passé je passe la methode index par défaut.
    $action = isset($params[1]) ? $params[1] : 'index';

    require_once(ROOT.'controllers/'.$controller.'.php');

    $controller = new $controller();

    if(method_exists($controller, $action)){
        $controller->$action();
    }else{
        http_response_code(404);
        echo "La page demandée n'existe pas.";
    }
    
}else{


}