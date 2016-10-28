<?php
class News extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('news/index',1);
    }

    function views($id)
    {
        #echo '<br/>'. var_dump($id); die;

        $this->view->ids = $id;

        $this->view->render('news/view/index',1);
    }
}
