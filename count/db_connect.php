<?php
# this in use database mysqli connection 
$db_host = 'localhost';
$db_name = 'xnvebabr_base';
$db_user = 'xnvebabr_phpcode';
$db_pswd = 'ghbrjkbcn1';

$db = mysqli_connect($db_host, $db_user, $db_pswd, $db_name) or die('Не могу подключится к базе данных');

