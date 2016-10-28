<?php
class Keywords extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->render('pullkeywords/index',1);
	}
}
