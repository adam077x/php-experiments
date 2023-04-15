<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once('partials/header.php');
    ?>
</head>
<body>
    <?php     
        include_once('partials/nav.php');
    ?>


    <div class="page-content">
        <?php
            if(!$_SESSION['isLogged']) {
                include_once('partials/login.php');
            }
        ?>

        <?php
            include_once('db/db.php');
            include_once('services/postService.php');

            $postService = new PostService($conn);

            $posts = $postService->get_all();

            foreach($posts as $row) {
                echo "
                <div>
                    <a href='post.php?id=" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['title']) . "</a>
                </div>
                ";
            }
        ?>
    </div>
</body>
</html>