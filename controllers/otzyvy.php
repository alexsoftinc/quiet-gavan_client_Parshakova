<?php
class Otzyvy extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('reviews/index',1);
    }

    function reviews()
    {
        $data = array();
        $post = $_POST;

        $data['author']     = Security::escape($post['author']);
        $data['emails']     = Security::escape($post['emails']);
        $data['comment']    = Security::escape($post['comment']);
        $data['moderation'] = (int) $post['moderation'];
        # Запрос к базе идёт прямо тут без использования модели пока архитектуру не перепишу
        $query = DB::insertData('tbl_reveiws', array(
            'author'     => $data['author'],
            'emails'     => $data['emails'],
            'comment'    => $data['comment'],
            'moderation' => $data['moderation']
        ));

        Redirect::to('otzyvy');
    }
}
/* Так делаются древовидные комментарии со стороны администрации как варинат к новостям на беретах
 * <input type="hidden" name="comment_post_ID" value="15" id="comment_post_ID">
 * <input type="hidden" name="comment_parent" id="comment_parent" value="0">
*/
