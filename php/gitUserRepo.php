<?php
include_once 'globalFunctions/opGet.php';
// $getUrl = opGet::get_url();

// $initPosition = $_GET['pos'];
// $initPosition = 0;

function gitRepos($user){
    $url = "https://api.github.com/users/$user/repos";
    // return $url;
    $json = opGet::get_url($url);
    // $json_decode = json_decode($json);
    // $obj = (object)[];
    // $i = 0;
    // foreach($json_decode as $dataJson){
    //    $obj->name[$i] = $dataJson->name;
    //    $i++;
    // //    $obj->data = $dataJson->name;
    // }
    // return json_encode($json); 
    return $json;
    
}
header('Content-Type: application/json');
echo gitRepos($_GET['gituser']);

?>