<?php
class Price extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('price/index',1);
    }
}
