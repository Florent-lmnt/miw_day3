<?php
// Redirect to script to send email
/*
    if (!empty($_POST['email'])) {

    // Sending invitation by email
    header('Location: send_email.php');
    exit;
}
*/

$body_class = "";

// Display delivery status, (tips anti-refreshing)
if (!empty($_GET['delivery']) and $_GET['delivery'] === "sent") {
    // Sending invitation by email
    // echo "OK c'est envoyé..";
    $body_class = "delivery_sent";
}
?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="<?php echo $body_class ?>">

<form action="send_email.php" method="post">
    <input type="email" name="email" placeholder="Ton email de star..." required/>
    <input type="submit" value="" id="submit"/>
    <label for="submit">
        <span>Inscris-toi !</span>
        <img src="img/vip.png" alt="svg vip">
    </label>
</form>

<div class="confirm">
    <div>
        <img src="img/mail.svg" alt="svg mail send">
    </div>
</div>

</body>
</html>