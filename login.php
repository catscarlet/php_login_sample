
<?php
session_start();
$_SESSION['username'] = null;
$_SESSION['userpwd'] = null;
$_SESSION['username'] = $_POST['username'];
$_SESSION['userpwd'] = $_POST['userpwd'];

/* The name of the database */
define('DB_NAME', 'php_login_sample');
/* MySQL database username */
define('DB_USER', 'test');
/* MySQL database password */
define('DB_PASSWORD', 'test');
/* MySQL database table */
define('DB_TABLE', 'userlist');

$con = mysql_connect('localhost', constant('DB_USER'), constant('DB_PASSWORD'));
if (!$con) {
    die('Could not connect: '.mysql_error());
}
mysql_select_db(constant('DB_NAME'), $con);

echo '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Page for information verification</title>
</head>
';

if (!verify($_SESSION['username'], $_SESSION['userpwd'])) {
    echo 'Your information is wrong , please check .';
} else {
    setcookie('Biscuit', 'Biscuit');
    echo 'Login Successfully';
    echo '<p>
    <a href="admin.php">Click to access to next page .</a>
  </p>';
}

mysql_close($con);

function verify($username, $userpwd)
{
    $sql = 'select * from '.constant('DB_TABLE')." where username = '".$username."'";
    $result = mysql_query($sql);
    while ($result && $row = mysql_fetch_array($result)) {
        if ($row['userpwd'] == $userpwd) {
            return true;
        } else {
            echo 'The Passord of '.$username.' is '.$row['userpwd'].' . not '.$userpwd.' .<br>';
            return false;
        }
    }
    echo 'User '.$username.' not found .<br>';
    return false;
}

 ?>
