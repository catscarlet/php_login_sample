
<?php
session_start();
$_SESSION['username'] = null;
$_SESSION['userpwd'] = null;
$_SESSION['username'] = $_POST['username'];
$_SESSION['userpwd'] = $_POST['userpwd'];

echo '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Page for information verification</title>
</head>
';

if ($_SESSION['username'] != 'root' || $_SESSION['userpwd'] != 'admin') {
    echo 'Your information is wrong , please check .';
} else {
    setcookie('Biscuit', 'Biscuit');
    echo 'Login Successfully';
    echo '<p>
    <a href="admin.php">Click to access to next page .</a>
  </p>';
}

 ?>
