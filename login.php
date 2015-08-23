<?php
$username=$_POST['username'];
$userpwd=$_POST['userpwd'];




if ($username!='root'||$userpwd!='admin')
{
  echo 'Your information is wrong , please check .';
}
 else {
  echo 'Login Successfully';
  }




 ?>
