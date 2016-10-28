<?php
class FeedNews extends Controller
{
	function __construct()
	{
		parnet::__construct();		
	}

	function index()
	{
		echo 'Новостная лента';
	}
}
