<?php
require_once('views/View.php');

class ControllerActivite
{
    private $_activiteManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && is_countable($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->activite();
    }

    private function activite()
    {
        $this->_activiteManager = new ActiviteManager;
        $activites = $this->_activiteManager->getActivites();
        $this->_view = new View('Activite');
        $this->_view->generate(array('activites' => $activites));
    }

}