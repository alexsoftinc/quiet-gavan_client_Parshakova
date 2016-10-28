<?php
class Servis extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('services/index',1);
    }

    function index()
    {
        return true;
    }
}
