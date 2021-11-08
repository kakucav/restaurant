<?php
    const TITLE = 'Menu';
    include('includes/header.php');
    if(isset($_GET['item']) and $menuItems[$_GET['item']]) {
        $item = $menuItems[$_GET['item']];
    } else {
        header('Location: menu.php');
    }
?>
<div class="item">
    <?php
        echo "<h3>{$item['title']}</h3><br>Price: {$item['price']} KM<br><p>Description: {$item['description']}</p>";
    ?>
</div>
<?php
    include('includes/footer.php')
?>
