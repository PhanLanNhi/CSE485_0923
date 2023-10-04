<?php
$strConnection = new PDO('mysql:host=localhost;dbname=btth01_cse485_ex02', 'root', 'yan13122003');
$strConnection->exec("set names utf8");
if(!$strConnection)
    die('Can not connection');

