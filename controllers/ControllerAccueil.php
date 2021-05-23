<?php
require_once('views/View.php');
class ControllerAccueil
{
    private $_activiteManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && is_countable($url) > 1)
            throw new Exception('Page introuvable'); 
        else
            $this->accueil();
    }

    private function accueil()
    {
        $this->_activiteManager = new AccueilManager;
        $activites = $this->_activiteManager->getAccueils();
        $this->_view = new View('Accueil');
        $this->_view->generate(array('activites' => $activites));
    }
}