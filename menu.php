<?php
const TITLE = 'Menu';
include('includes/header.php');
?>
<div class="menu">
    <h3>Our food: </h3>
    <ul>
    <?php
        foreach ($menuItems as $key => $item) {
            echo "<li><a href='item.php?item={$key}'>{$item['title']} - {$item['price']}</a></li>";
        }
    ?>
    </ul>
</div>
<?php
include('includes/footer.php');
?>
