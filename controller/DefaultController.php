<?php

class DefaultController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index($get,$post) {
        $this->view->render("default/index");
    }
    
}

?>
