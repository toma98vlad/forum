<div class="user_menu_wrapper">
    <div class="user_menu_container">
<!--        <div class="user_menu_title">-->
<!--            Forum-->
<!--        </div>-->
        <div class="user_menu_panel">
            <div class="user_menu_name">
                <?php

                echo $_SESSION['user_logged'];

                ?>
            </div>
            <div class="user_menu_button">
                <a href="../app/controller/user_actions/logout.php">PM</a>
            </div>
            <div class="user_menu_button">
                <a href="../app/controller/user_actions/logout.php">Sign Out</a>
            </div>
        </div>
    </div>
</div>