<?php

$name = $_POST['name'];
$message = $_POST['message'];

$fopen = fopen("/var/www/html/login/web/find/a.txt","a");
fwrite($fopen,"name:".$name."\n");
fwrite($fopen,"message:".$message."\n");
fwrite($fopen,"-------"."\n");
fwrite($fopen,"-------"."\n");
fclose($fopen);

header("Location:http://10.100.0.163:30/login/web/find/wish.html");
?>