<?php

echo 'Processing...';

// Check for GET variable
if (isset($_GET['name'])) {
    echo 'Your name is ' . $_GET['name'];
}

// Check for POST variable
if (isset($_POST['name'])) {
    echo 'Your name is ' . $_POST['name'];
}