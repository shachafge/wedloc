<?php
require_once('../classes/init.php');

session_start();


global $session;
$error='';
$user=$_POST['email'];
$password=$_POST['password'];

if( isset( $_SESSION['user'] ) ) {
      //echo $_SESSION['user'] ;
   }else {
      $_SESSION['user'] = $user;
   }

$user_with_password=new users();
$error=$user_with_password->find_user($user,$password);
if (!$error){
    echo "true";
    exit;
}
else
echo "false";


?>


