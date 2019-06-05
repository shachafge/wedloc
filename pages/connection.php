<?php

require_once('../classes/init.php');


session_start();



global $session;
$error='';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$season = $_POST['season'];
$style=$_POST['style'];
$place = $_POST['place'];
$element = $_POST['element'];
$budget = $_POST['budget'];
$icon = $_POST['icon'];
$id_string="";
$placeArray=array();
$id_place="";
$name="";
global $database;
global $database1;
$error1="";
// if( isset( $_SESSION['user'] ) ) {
//       //echo $_SESSION['user'] ;
//    }else {
//       $_SESSION['user'] = $user;
//    }

$user_new =new users();
$error=$user_new->find_user($email,$password);
$user_new->add_user($email,$fname,$lname,$password,$icon);
$result=$database->query("SELECT `c_placeId`, COUNT(`category`) AS `count` FROM `category_place` WHERE `category`IN ('".$season."','".$style."','".$place."','".$element."','".$budget."') GROUP BY `c_placeId` ORDER BY `count` DESC");
if (isset($result)) {
    $i = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id_place = $row['c_placeId'];
            $placeArray[$i] = $id_place;
            $i += 1;
        }
    }
}
    $string=",";

$id_string=implode(",",$placeArray);
$sql = "Insert into user_result(user_email,places_list) values ('". $email . "','" . $id_string . "')";
$result = $database->query($sql);
if (!$result)
    $error1= 'Can not add user.  Error is:' . $database->get_connection()->error;
else {
    $error1= ' add user.';

}

echo $id_string;


$id_place=$placeArray[0];
$name=$database->query("SELECT `name` FROM `place` WHERE `idPlace`='".$id_place."'");
$row1=$name->fetch_assoc();
echo $row1['name'];



/*if (!$error){
    echo "true";
    exit;
}
else
    echo "moranmoranmoranmoranmoranmoranmoranmoran";*/


?>
