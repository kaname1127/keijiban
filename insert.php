<?php
mb_internal_encording("utf8");

$pdo = new PDO("mysql:dbname=php_keijiban;host=localhost;", "root", "mysql");

$pdo -> exec("insert into keijiban(handlename,title,comments)
values('".$_POST['handlename']."', '".$_POST['title']."', '".$_POST['comments']."');");

header("Location:http://localhost/php_keijiban/index.php");

 ?>
