<?php
session_start();
echo '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Page for SESSION and COOKIE verification</title>
</head>
';


echo '$_SESSION[\'username\'] is '.$_SESSION['username'].'<br>';
echo '$_SESSION[\'userpwd\'] is '.$_SESSION['userpwd'].'<br>';
echo '$_COOKIE[\'Biscuit\'] is '.$_COOKIE['Biscuit'].'<br><br>';


if ($_SESSION['username'] != 'root' || $_SESSION['userpwd'] != 'admin') {
    echo 'SESSION mismatch!!!';
} else {
    echo 'SESSION match!';
}

echo '<br>';

if ($_COOKIE['Biscuit'] != 'Biscuit') {
    echo 'COOKIE mismatch!!!';
} else {
    echo 'COOKIE match!';
}
