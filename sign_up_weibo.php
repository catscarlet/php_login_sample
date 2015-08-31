
<?php

$code = $_GET['code'];
$App_Key = '';
$client_secret = '';
echo 'The code is '.$code.'<br><br>';
$url = "https://api.weibo.com/oauth2/access_token?client_id=$App_Key&client_secret=$client_secret&grant_type=authorization_code&redirect_uri=http://pi.catscarlet.com:8091/php_login_sample/sign_up_weibo.php&code=$code";
//$url = urlencode($url);
//echo $url.'<br>';

$contents = http_post_data($url, ' ');
//var_dump($contents);
$access_token = json_decode($contents);

foreach ($access_token as $key => $value) {
    echo "The $key is \"$value\" <br>";
}





function http_post_data($url, $data)
{
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    curl_close($ch);

    return $response;
}






/*
$username = $_POST['username'];
$userpwd = $_POST['userpwd'];
$usermail = $_POST['usermail'];
*/

/* The name of the database */
define('DB_NAME', 'php_login_sample');
/* MySQL database username */
define('DB_USER', 'test');
/* MySQL database password */
define('DB_PASSWORD', 'test');
/* MySQL database table */
define('DB_TABLE', 'userlist');

/*
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

if ($username == '' || if_username_exist($username)) {
    echo 'Your information is wrong , please check .';
} else {
    $sql = "INSERT INTO userlist (`id`, `username`, `userpwd`, `usermail`, `description`) VALUES (NULL, '$username', '$userpwd', '$usermail', NULL)";
    //var_dump($sql);
    $result = mysql_query($sql);
    if ($result) {
        echo 'User Add Successfully.';
    } else {
        echo 'Someting Wrong.';
    }
}

mysql_close($con);

function if_username_exist($username)
{
    $sql = 'select * from '.constant('DB_TABLE')." where username = '".$username."'";
    $result = mysql_query($sql);
    if ($result && $row = mysql_fetch_array($result)) {
        echo 'Username already exists.<br>';

        return true;
    } else {
        return false;
    }
}
*/
 ?>
