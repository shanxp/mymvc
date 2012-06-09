<?php

class Controller {

    protected $model;
    protected $view;

    public function __construct() {
        $this->view = new View();
    }

    public function loadModel($modelname) {
        if (!empty($modelname)) {
            $modelfile = "../model/" . $modelname . "Model.php";
            if (file_exists($modelfile)) {
                require_once $modelfile;
                $currentModel = $modelname . "Model";
                $this->model = new $currentModel;
            }
        }
    }

}

?>
