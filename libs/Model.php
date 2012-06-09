<?php

class Model {
    protected $db;
    public function __construct() {
       $this->db = new Database(DBTYPE, DBHOST, DBNAME, DBUSER, DBPASSWD);
    }
    public function setDBModel($model) {
        $this->db = $model;
    }
}

?>
