<?php
class View
{
    public function __construct() {}

    public function render($tmp_name, $no_include = false)
    {
        if($no_include == true):
            include_once 'views/'.$tmp_name.'.php';
        else:
            include_once 'views/section/header.php';
                include_once 'views/'.$tmp_name.'.php';
            include_once 'views/section/footer.php';
        endif;
    }
}
