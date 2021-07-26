<?php 
include_once 'globalFunctions/opGet.php';
$getUrl = opGet::get_url('https://www.google.com');

echo $getUrl;

?>