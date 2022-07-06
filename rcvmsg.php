<?php
$lengthofmsg=intval($_GET['length']);
$f=fopen("chatlist.txt","r");
$data=fread($f,filesize("chatlist.txt"));
fclose($f);
$templen=strlen($data)-$lengthofmsg;
if($templen!=0)
{
    echo ";".substr($data,$lengthofmsg,strlen($data));
}
else{
    echo "no";
}
?>