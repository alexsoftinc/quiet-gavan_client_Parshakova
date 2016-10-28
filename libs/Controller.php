<?php
class Controller
{
    public function __construct()
    {
        $this->view = new View(); //Запускаем библиотеку видов для наследников этого класса
    }

    public function load($model)
    {
        $path = 'models/'.$model.'_Model.php';

        if(file_exists($path)) {
            include_once 'models/'.$model.'_Model.php';
            //Определение для имени класса помимо файла
            $modelName = $model .'_Model';
            $this->model = new $modelName();
        }
    }
}
