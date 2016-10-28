<?php
class Pages extends Controller
{
	function __construct()
	{
		parent::__construct();
        Session::isAuth($_SESSION);
    }

	function index()
	{
		$this->view->render('pages/index');
	}

    function edit($id)
    {
        $this->view->id = (int)$id;
        $this->view->render('pages/edit/index');
    }

    function update()
    {
        $id = intval($_POST['page_id']);

        $data = array();

        $data['title']   = Security::escape($_POST['title']);
        $data['content'] = $_POST['content'];

        $q = DB::run()->prepare("UPDATE tbl_page SET title = :title, content = :content WHERE id = :id");

        $q->execute(array(
            ':title' => $data['title'],
            ':content' => $data['content'],
            ':id'      => $id
        ));

        Redirect::to('pages');
    }
}
