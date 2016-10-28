<?php
class Booking extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('booking/index',1);
    }

    function post()
    {
    	$data = array();

		$data['username']   = $_POST['username'];
		$data['telephone']  = $_POST['telephone'];
		$data['forminit']   = $_POST['forminit'];
		$data['dateinsert'] = Security::escape($_POST['dateinsert']);
		$data['timeinsert'] = $_POST['timeinsert'];
		$data['na_skolko']  = Security::escape($_POST['na_skolko']);
		$data['roooms_id']  = $_POST['roooms_id'];

		$query = DB::insertData('tbl_booking', array(
		    'username'   => $data['username'],
		    'telephone'  => $data['telephone'],
		    'forminit'   => $data['forminit'],
		    'dateinsert' => $data['dateinsert'],
		    'timeinsert' => $data['timeinsert'],
		    'na_skolko'  => $data['na_skolko'],
		    'rooms'		 => $data['roooms_id']
		));

		Redirect::to('rooms');
    }
}
