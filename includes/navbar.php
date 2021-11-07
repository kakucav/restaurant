<ul>
    <?php
        foreach ($pages as $page) {
            echo "<li><a href='{$page['page']}' title='{$page['title']} Page'>{$page['title']}</a></li>";
        }
    ?>
</ul>
