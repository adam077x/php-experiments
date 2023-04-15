<?php
    require_once("./Layout/Layouts/MainLayout.php");

    abstract class Controller {
        public abstract function createView($view, $params);
    }
?>