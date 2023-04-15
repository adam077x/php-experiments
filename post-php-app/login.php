<?php
require_once('services/userService.php');
require_once('db/db.php');

$userService = new UserService($conn);

print_r($_POST);
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userService->login($username, $password);

    header("Location: /index.php");
}