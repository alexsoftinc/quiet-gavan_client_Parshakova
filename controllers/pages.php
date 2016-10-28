<?php
class Pages extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index($alias)
	{
		$this->view->alias = $alias;

		$this->view->render('pages/index');
	}
}
