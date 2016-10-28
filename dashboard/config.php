<?php
# Подключение библиотеки БазДанных для того что бы всё нормально работало вывод документа на печать
include_once 'libs/Database/DBase.php';

$get_set = DB::run()->query("SELECT * FROM tbl_settings WHERE id = '1'")->fetch(PDO::FETCH_OBJ);

define('SITEURL', 'http://newcms/');
define('ROOMS_PATH', 'upload/rooms/');
/**
 * подключение других классов важных для работы системы
 */
include_once 'class/Session.php';
include_once 'class/Redirect.php';
include_once 'class/Security/security.class.php';

# Подключение библиотеки для работы с сервисом гео локации 
include_once 'libs/geoLocation/geo.php';
function debug($param) {
    echo '<pre>',print_r($param,1),'</pre>';

    return true;
}

Session::init();
