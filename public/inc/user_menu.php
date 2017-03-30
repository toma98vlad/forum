<div class="user_menu_wrapper">
    <div class="user_menu_container">
        <div class="user_menu_title">
            Forum
        </div>
        <div class="user_menu_panel">
            <?php

            echo $_SESSION['user_logged'];

            ?>
            <div class="user_menu_button">
                <a href="../app/controller/user_actions/logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>