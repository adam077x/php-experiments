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

            if(isset($_POST['submit']) && $_SESSION['isLogged']) {
                $title = $_POST['title'];
                $content = $_POST['content'];

                $result = $postService->create($title, $content, '');
            }
        ?>

        
        <form class="post-form" action="createPost.php" method="POST">
            <input type="text" name="title" required>
            <textarea name="content" required></textarea>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>