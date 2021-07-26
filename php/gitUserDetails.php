<?php
include_once 'globalFunctions/opGet.php';
// $getUrl = opGet::get_url();

// $initPosition = $_GET['pos'];
if(!$_GET['user']){
    $user = 'Nicolassmaniotto';
}else{
    $user = $_GET['user'];
}
// $initPosition = 0;
function gitDetails($user){
    $url = "https://api.github.com/users/$user";
    
    return opGet::get_url($url);
}
header('Content-Type: application/json');
echo gitDetails($user);
// echo $user;
// echo opGet::get_url(gitDetails("Nicolassmaniotto"));


?>