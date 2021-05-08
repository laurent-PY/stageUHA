<?php
class Activites extends Controller{

    public function index(){
        $this->loadModel('Activite');
        $activites = $this->Activite->getAll();
       
        $this->render('index', ['activites' => $activites]);
    }
}