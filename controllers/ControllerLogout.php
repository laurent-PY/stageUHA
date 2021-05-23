<?php


class ControllerLogout
{
    private $_logoutManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && is_countable($url) > 1)
            throw new Exception('Page introuvable');
        else
            $this->logouts();
    }

    private function logouts()
    {
        $this->_logoutManager = new LogoutManager;
        $logouts = $this->_logoutManager->getlogout();
        $this->_view = new View('Logout');
        $this->_view->generate(array('logouts' => $logouts));
    }
}