<?php
class Visits_Mobile extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->render('visits/mobile/index');
	}

	function view_ip_detail_all()
	{
		$this->view->render('visits/mobile/ip_views/index');
	}

	function view_ip_detail_current($ip_address)
	{
		$this->view->address = $ip_address;
		$this->view->render('visits/mobile/detail/index');
	}

	function pc_view()
	{
		$this->view->render('visits/all/index');
	}
}
