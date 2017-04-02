<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/view/global/online_users.php';
?>

<div class="cassette_wrapper">
    <div class="cassette_title">
        Online users <?php echo '(' . count($online_users_list) . ' total)'; ?>
    </div>
    <div class="cassette_container">
        <?php

        $online_users_list_formatted = '';
        $count = 0;
        foreach ($online_users_list as $user) {
            $count++;
            if ($count == count($online_users_list)) {
                $online_users_list_formatted .= $user['username'];
            } else {
                $online_users_list_formatted .= $user['username'] . ', ';
            }
        }
        echo $online_users_list_formatted;
        ?>
    </div>
</div>