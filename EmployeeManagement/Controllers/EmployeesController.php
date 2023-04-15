<?php
    class EmployeesController extends Controller {
        public $layout;

        public function __construct() {
            $this->layout = new MainLayout();
        }

        public function createView($view, $params) {
            $params["content"] = $content;
            $params["view"] = $view;
            $this->layout->renderLayout($params);
        }
    }
?>