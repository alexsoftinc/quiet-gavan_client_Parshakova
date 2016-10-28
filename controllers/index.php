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
        $this->view->render("home/index1",1);
    }

    public function index()
    {    	
        $this->view->render("home/index1",1);
    }
}
