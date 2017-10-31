<?php
session_start();

$userAnswer = $_POST['userAnswer'];
$answer = $_POST['answer'];
$_SESSION['question']++;

$_SESSION['report']['notNumber'] = null;
$_SESSION['report']['correct'] = null;
$_SESSION['report']['wrong'] = null;

if (isset($_POST['userAnswer']) && !is_numeric($_POST['userAnswer'])) {
    $_SESSION['report']['notNumber'] = '<h5 class="error">You must enter a numerical value.</h5>';
   
}
if (isset($_POST['userAnswer']) && ($userAnswer == $answer)) {
    $_SESSION['report']['correct'] = '<h5 class="correct">Correct!</h5>';
    $_SESSION['score']++;
}
if (isset($_POST['userAnswer']) && is_numeric($_POST['userAnswer']) && ($userAnswer != $answer)) {
    $_SESSION['report']['wrong'] = '<h5 class="error">Wrong! The answer is ' . $answer . '.</h5>';
}

header("Location: index.php");
?>
