<?php

class View {

    public function __construct() {
        
    }

    public function render($viewfile) {
        $layoutfile = "../view/layout.php";
        $file = "../view/" . $viewfile . ".php";
        $defaultfile = "../view/default/index.php";
        if (file_exists($file)) {
            $content = file_get_contents($file);
        }
        else {
            $content = file_get_contents($defaultfile);
        }
        require $layoutfile;
    }

}

?>
