<?php
    const TITLE = 'Staff';
    include('includes/header.php');
?>
<div class="staff">
    <?php
        foreach ($staff as $member) {
            echo "<div><img src='img/{$member['image']}' alt='{$member['name']}' ><br>Name: {$member['name']}<br>Position: {$member['position']}</div>";
        }
    ?>
</div>
<?php
    include('includes/footer.php');
?>
