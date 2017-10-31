<?php
session_start();
extract($_POST);
$file = "credentials.config";
$line = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$verified = False;

for ($x = 0; $x < count($line); $x++) {
    $info = explode(", ", $line[$x]);
    if ($email == $info[0] && $password == $info[1]) {
        $verified = True;
        $user = $info[0];
    } 
}
if ($verified) {
    $_SESSION['user'] = $user;
    header("location: index.php");
    die();
}
else {
    header("location: login.php?error=true");
    die();
}
?>