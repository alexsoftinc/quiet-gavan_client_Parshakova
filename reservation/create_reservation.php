<?php
include_once '../config.php';

$data = array();

$data['username']  = $_POST['username'];
$data['telephone'] = $_POST['telephone'];
$data['forminit']  = $_POST['forminit'];
$data['dateinsert']  = Security::escape($_POST['dateinsert']);
$datap['timeinsert'] = $_POST['timeinsert'];

$query = DB::insertData('tbl_booking', array(
    'username'  => $data['username'],
    'telephone' => $data['telephone'],
    'forminit'  => $data['forminit'],
    'dateinsert' => $data['dateinsert'],
    'timeinsert' => $data['timeinsert']
));
