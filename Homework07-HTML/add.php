<?php

$password = isset($_POST['password']) && $_POST['password'] !== '' ? $_POST['password'] : false;
$repeatPassword = isset($_POST['repeatPassword']) && $_POST['repeatPassword'] !== '' ? $_POST['repeatPassword'] : false;

$match = $password === $repeatPassword && $password !== false ? true : false;
$message = '';
$back = "<a href=\"01.php\"><button>Go back</button></a>";

if ($password === false || $repeatPassword === false) {
    echo "<p style=\"font - weight: bold; color: red;\">Enter your password!</p><br><br>" . $back;
} else if (!$match) {
    echo "<p style=\"font - weight: bold; color: red;\">Passwords does not match!</p>" . $back;
} else {
    $match = true;
}
if ($match){
    echo "<p style=\"color: green;\">Passwords match. Good to go.</p><a href=\"01.php\"><button>Add another employee</button></a>";
}