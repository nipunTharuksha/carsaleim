<?php
$lang="en";
if(isset($_GET["lang"])){
    $lang=$_GET["lang"];
}
$lang=parse_ini_file("C:/wamp64/www/im/carsale/lang/".$lang.".ini");
?>