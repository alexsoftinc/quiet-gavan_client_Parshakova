<?php
class SiteGallery extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('gallery/index',1);
    }
}
