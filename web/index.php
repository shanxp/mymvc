<?php

require '../config/constants.php';
require '../config/database.php';

function __autoload($class) {
    require LIBS . $class . ".php";
}

$application = new FrontController();
?>