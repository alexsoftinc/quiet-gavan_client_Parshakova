<?php
class Sitemap extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->msg = 'Tsss';
		$this->view->render('sitemap/index',1);
	}
}
