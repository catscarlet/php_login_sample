<?php
session_start();
echo '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Page for SESSION and COOKIE verification</title>
</head>
';

if ($_SESSION['username'] != 'root' || $_SESSION['userpwd'] != 'admin') {
    echo 'SESSION mismatch!';
} else {
    echo 'SESSION match!';
}

echo '<br>';

if ($_COOKIE['Biscuit'] != 'Biscuit') {
    echo 'COOKIE not match!';
} else {
    echo 'COOKIE match!';
}
