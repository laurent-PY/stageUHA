<?php
abstract class Controller{

    public function loadModel(string $model){
        require_once(ROOT.'models/'.$model.'.php');
        $this->$model = new $model();
    }


    public function render(String $fichier, array $data = []){
        extract($data);
        require_once(ROOT.'views/'.strtolower(get_class($this))).'/'.$fichier.'.php';
    }
}
