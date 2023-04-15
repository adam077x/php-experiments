<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo $params['title'];
        ?>
    </title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="Static/css/NavigationBar.css" rel="stylesheet">
    <link href="Static/css/Main.css" rel="stylesheet">
</head>
<body>

<div class="left-nav-bar">
    <div class="logo">
        <h1>LOGO</h1>
    </div>
    <hr>

    <ul class="left-nav-btns">
        <?php if($params["view"] == "Dashboard") { ?>
        <a class="left-nav-btn large-button-selected" href="/"><li>Dashboard</li></a>
        <?php } else { ?>
            <a class="left-nav-btn large-button" href="/"><li>Dashboard</li></a>
        <?php } ?>

        <?php if($params["view"] == "Employees") { ?>
        <a class="left-nav-btn large-button-selected" href="/employees"><li>Employees</li></a>
        <?php } else { ?>
            <a class="left-nav-btn large-button" href="/employees"><li>Employees</li></a>
        <?php } ?>

        <?php if($params["view"] == "Roles") { ?>
        <a class="left-nav-btn large-button-selected" href="/roles"><li>Roles</li></a>
        <?php } else { ?>
            <a class="left-nav-btn large-button" href="/roles"><li>Roles</li></a>
        <?php } ?>
    </ul>
</div>

<div class="top-nav-bar">
    <h3 class="logged-in">
        Logged in as: <strong>Admin</strong>
    </h3>
</div>

<div class="content-container">
<?php
    require_once("Views/".$params["view"].".php");
?>
</div>

</body>
</html>