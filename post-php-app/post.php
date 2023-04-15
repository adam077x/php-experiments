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
            include_once('db/db.php');
            include_once('services/postService.php');

            $postService = new PostService($conn);

            $post = $postService->get($_GET['id'])->fetch();

            echo "
            <div>
                <h2 class='title'>
                    {$post["title"]}
                </h2>
                <div class='content'>
                    {$post["content"]}
                </div>
            </div>
            "
        ?>
    </div>
</body>
</html>