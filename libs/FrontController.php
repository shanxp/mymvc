<?php

class FrontController {

    protected $controller;
    protected $module;
    protected $action;

    public function __construct() {
        $this->_init($_GET, $_POST);
    }

    private function _init($get = array(), $post = array()) {
        $url = isset($get['url']) && !empty($get['url']) ? $get['url'] : null;
        if ($url != null) {
            $url = rtrim($url, '/');
            $url = explode('/', $url);
        }

        if (isset($url[0])) {
            $this->module = trim($url[0]);
        } else {
            $this->module = "default";
        }
        if (isset($url[1])) {
            $this->action = trim($url[1]);
        } else {
            $this->action = "index";
        }
        $this->module = ucfirst($this->module);
        $file = "../controller/" . $this->module . "Controller.php";

        if (!file_exists($file)) {
            $file = "controller/errorController.php";
            $this->module = "error";
            $this->action = "index";
        }
        require_once $file;
        $currentController = $this->module . "Controller";
        $this->controller = new $currentController;
        $this->controller->loadModel($this->module);
        $this->controller->{$this->action}($get, $post);
    }

}

?>
