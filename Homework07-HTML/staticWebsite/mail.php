<?php

ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");

$to = 'kaloyanpetrov1994@gmail.com';
$subject = $_POST['topic'];
$message = $_POST['mailText'];
$from = $_POST['email'];

$headers =  'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Your name <$from>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My website: Contact me</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutMe.html">About Me</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="skills.html">My Programming Skills</a></li>
            <li><a href="mail.html">Contact Me</a></li>
        </ul>
    </nav>
</header>
<section>
    <form action="mail.php" method="post">
        <label for="email">Enter your email address:</label>
        <div><input type="email" name="email" id="email" placeholder="Enter your email here..."/><br /></div>
        <label for="topic">What is your email about?</label>
        <div><input type="text" size="50" maxlength="50" name="topic" id="topic" placeholder="Topic..."/><br /></div>
        <label for="mailText"></label>
        <div><textarea rows="10" cols="40" name="mailText" id="mailText" placeholder="Enter your message here..." ></textarea></div>
        <button type="submit">Send Mail</button>
    </form>
</section>
</body>
</html>
