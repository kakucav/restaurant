<?php
    const TITLE = 'Contact';
    include('includes/header.php');
?>
<div class="contact">
    <h2>Get in touch with us!</h2>
    <?php
        if (isset($_POST['submit'])) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);

            if(!$name or !$email or !$message) {
                echo "<h4>All fields required!</h4>";
                exit();
            }

            $to = "vidoslav_k_96@hotmail.com";
            $subject = "{$name} sent you a message";
            $headers = "MIME-Version 1.0\r\nContent-type: text/plain; charset=iso-8859-1\r\nFrom: {$name} <{$email}>\r\nX-Priority: 1\r\nX-MSMail-Priority: High\r\n\r\n";

            if(mail($to, $subject, $message, $headers)) {
                echo "<h4>Email sent!</h4>";
            } else {
                echo "<h4>Sorry, your email was not sent, try again in few moments..";
            }
            exit();
        }
    ?>
    <form method="post" action="">
        <label for="name">Your name</label>
        <input type="text" id="name" name="name">

        <label for="email">Your email</label>
        <input type="email" id="email" name="email">

        <label for="message">Your message</label>
        <textarea id="message" name="message"></textarea>

        <input type="submit" name="submit" value="Submit message">
    </form>
</div>
<?php
    include('includes/footer.php')
?>
