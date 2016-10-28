<?php
class Booking extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('booking/index');
    }

    function restcalls()
    {
    	$this->view->render('booking/restcall/index');
    }
}
