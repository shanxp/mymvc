<?php

class ErrorController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index($get,$post) {
        $this->view->render("error/index");
    }
    
}

?>
