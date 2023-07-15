<?php
$connection = mysqli_connect('localhost','root','','bcanews');
if(!$connection){
    die("Connection failed:".mysqli_error());
}
?>