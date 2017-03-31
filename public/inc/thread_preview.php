<div class="thread_preview_wrapper">
    <div class="thread_preview_container">
        <div class="thread_preview_title">
            <?php
            echo $announcement_title;
            ?>
        </div>
        <div class="thread_preview_stats">
            <?php
            echo $announcement_author . ' at ' . $announcement_date . ' ' . date('h:i', $announcement_time);
            ?>
        </div>
    </div>
</div>