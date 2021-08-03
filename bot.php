<?php
$text=$_GET["text"];
$url="https://api-rasatm.tk/wiki.php?q=$text";
$url = json_decode(file_get_contents($url),true);
 $fa= $url["result"];
 
 $txt="<b>$fa</b>
 ";
 echo $txt;

if (is_file("error_log")){
unlink("error_log");
}
?>