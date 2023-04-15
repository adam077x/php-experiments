<?php
    require_once("Routes/Router.php");
    require_once("Controllers/Controller.php");
    require_once("Controllers/IndexController.php");
    require_once("Controllers/EmployeesController.php");
    require_once("Controllers/RolesController.php");
    require_once("Layout/Layout.php");
    require_once("Layout/Layouts/MainLayout.php");

    $router = new Router();

    $router->route("/", function() {
        $params = array("title"=>"Dashboard");
        $controller = new IndexController();
        $controller->createView("Dashboard", $params);
    });
    
    $router->route("/employees", function() {
        $params = array("title"=>"Dashboard");
        $controller = new EmployeesController();
        $controller->createView("Employees", $params);
    });

    $router->route("/roles", function() {
        $params = array("title"=>"Dashboard");
        $controller = new RolesController();
        $controller->createView("Roles", $params);
    });
?>