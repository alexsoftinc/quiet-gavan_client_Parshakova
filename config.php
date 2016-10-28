<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Игорь
 * Date: 29.10.15
 * Time: 19:19
 * File basic configuration.
 */
//Подключение библиотеки БазДанных для того что бы всё нормально работало вывод документа на печать
include_once 'libs/Database/DBase.php';
//Site path
$get_set = DB::run()->query("SELECT * FROM tbl_settings WHERE id = '1'")->fetch(PDO::FETCH_OBJ);

define('SITEURL', $get_set->site_adress);
define('ROOMS_PATH', 'upload/rooms/');
/**
 * подключение других классов важных для работы системы
 */
include_once 'class/Redirect.php';
include_once 'class/Security/security.class.php';
include_once 'count/start_counter.php';

function debug($param) {
    echo '<pre>',print_r($param,1),'</pre>';

    return true;
}
