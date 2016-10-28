<?php
class Reviews extends Controller
{
	function __construct()
	{
		parent::__construct();
        Session::isAuth($_SESSION);
    }

	function index()
	{
		$this->view->render('reviews/index');
	}
}
