<?php
/**
 * 
 */
include_once 'config.php';

$get_settings = DB::run()->query("SELECT * FROM tbl_settings WHERE id = '1'")->fetch(PDO::FETCH_OBJ);

if($get_settings->site_off == '0') {
    include_once 'views/error/index.php';
} else {
    function __autoload($class) {
        include_once 'libs/'.$class.'.php';
    }

    $app = new Bootstrap();
}
