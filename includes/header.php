<?php
    const FOOTER_STRING = 'Premium Restaurant';
    include('includes/arrays.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link href="styles.css" rel="stylesheet">
    <title> <?php echo TITLE; ?> | Restaurant App</title>
</head>
<body>
<header>
    <div class="banner">
        <a href="index.php" title="Home Page">
            <img src="img/logo.jpg" alt="Restaurant Logo">
        </a>
    </div>
    <div class="navbar">
        <?php
            include('includes/navbar.php');
        ?>
    </div>
</header>
<main>