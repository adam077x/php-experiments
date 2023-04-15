<nav>
    <div class="buttons">
        <div class="left-side-btns">
            <a href="/" class="popular button">
                popular
            </a>
            <?php 
                if($_SESSION['isLogged']) {
            ?>
            <a href="/createPost.php" class="create-post button">
                create
            </a>
            <?php
                }
            ?>
        </div>

        <?php
            if($_SESSION['isLogged']) {
        ?>
        <div class="right-side-btns">
            <a href="/logout.php" class="create-post button">
                logout
            </a>
        </div>
        <?php
            }
        ?>
    </div>
</nav>