<?php
$f=fopen("chatlist.txt","r");
$senddata=fread($f,filesize("chatlist.txt"));
fclose($f);
echo $senddata;
?>