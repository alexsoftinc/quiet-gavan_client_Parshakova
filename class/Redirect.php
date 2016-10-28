<?php
/**
 * Created by JetBrains PhpStorm.
 * User: AlexSoftInc
 * Date: 06.10.15
 * Time: 17:22
 */
class Redirect
{
    public static function to($value)
    {
        if(isset($value)):
            echo "<meta http-equiv='refresh' content='0; url=/$value'>";
        else:
            exit("<h1>Ваш запросс не выполнен попробуйте снова или передайте параметр</h1>");
        endif;
    }
}
