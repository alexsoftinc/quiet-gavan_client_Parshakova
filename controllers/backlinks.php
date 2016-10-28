<?php
class Backlinks extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		# code...
		$this->view->render('links/index',1);
	}
}
