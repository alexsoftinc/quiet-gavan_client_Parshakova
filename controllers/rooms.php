<?php
class Rooms extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index($param = 'standart')
    {
        $this->view->param = $param;
        $this->view->render('rooms/index',1);
    }

    function nomera($alias)
    {
        $this->view->alias = $alias;
        $this->view->render('rooms/item/index',1);
    }
}
