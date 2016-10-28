<?php
/**
 * Created by JetBrains PhpStorm.
 * This file is Home controller
 */
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
		
		Session::isAuth($_SESSION);        
        
        $this->view->render("home/index");
    }

    public function index()
    {    	
        $this->view->render("home/index");
    }
}
