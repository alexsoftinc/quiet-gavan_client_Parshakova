<?php
class Contacts extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('contacts/index',1);
    }
}
