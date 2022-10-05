<?php

error_reporting(0);

session_start();
// Include Controller file configuration file
require 'Controller.php';

/**
 * This is the first entry point from the index.php file
 * it checks if the input field isset and not empty
 * The it create an instance of the controller
 * It then pass in the inputted url to the check url method in the controller
 */
if(!empty($_POST['url'])) {
    $url = $_POST['url'];
    $url = (new Controller())->check_url($url);
}

if(empty($_POST['url'])) {
    $_SESSION['error'] = 'Please enter a url';
    header("Location: " . $_SERVER["HTTP_REFERER"]); //redirect with error here
}