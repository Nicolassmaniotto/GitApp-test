<?php
include_once 'globalFunctions/opGet.php';
// $getUrl = opGet::get_url();
if(isset($_GET['since'])){
    $initPosition = $_GET['since'];
}else{
    $initPosition = 0;
}

// $initPosition = 0;
function gitSince($i){
    $url = "https://api.github.com/users?since=$i";
    //  $url;
    $obj = (object)[];
    $obj->data = json_decode(opGet::get_url($url));
    $obj->link = 'php/gitSince.php';
     return json_encode($obj);
};
// // header('Content-Type: application/json');
echo gitSince($initPosition);



?>