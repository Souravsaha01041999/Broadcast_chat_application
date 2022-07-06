<?php
$msg=$_GET['data'];
$f=fopen("chatlist.txt","a");
fwrite($f,$msg);
fclose($f);
?>