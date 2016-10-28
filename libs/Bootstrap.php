<?php
/**
 * Created by JetBrains PhpStorm.
 * User: AlexSoftInc
 * Date: 29.10.15
 * Time: 19:43
 * The routing file
 */
class Bootstrap
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(empty($url[0])) {
            include_once 'controllers/index.php';
            $controller = new Index();
            return false;
        }

        $file = 'controllers/'.$url[0].'.php';

        if(file_exists($file)) {
            include_once "{$file}";
        } else {
            include_once 'controllers/Error.php';
            $controller = new Error();
            return false;
        }

        $controller = new $url[0]; //Объявление методов подключаемого контроллера по запросу
        $controller->load($url[0]);

        if(isset($url[2])) {
            if(method_exists($controller, $url[1])) {
                // Is load controller/method/paramIs/param2/param3 И всё это работает по умолчанию в методах
                $controller->{$url[1]}($url[2],$url[3],$url[4]);
            } else {
                $this->error();
            }
        } else {
            if(isset($url[1])) {
                if(method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->error();
                }
            } else {
                $controller->index();
            }
        }
    }

    public function error()
    {
        include_once 'controllers/Error.php';

        $error = new Error();
        $error->index();

        return false;
    }
}
