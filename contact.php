<?php
session_start();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
    header("Location: /barca-academy/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us | Barca Academy</title>
    <link rel="stylesheet" href="/barca-academy/contact.css">
</head>

<body>
    <section class="contact">
        <div class="cont container">
            <div class="contact-text">
                <p>Drop your inquiry here and our experts will get back to you.</p>
                <h6>Address</h6>
                <p class="address">
                Gonggabu, Kathmandu District, Bāgmatī Zone, Madhyamanchal, Nepal
                </p>
                <h6>Email</h6>
                <p class="mail">Govindsaud13@gmail.com</p>
            </div>
            <div class="contact-form">
                <form>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="5" required></textarea>
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </section>
</body>

</html>