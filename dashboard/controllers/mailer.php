<?php
class Mailer extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->view->render('mailer/index');
    }

    function postSomeMailList()
    {
        $post = array();

        $post['message'] = $_POST['text'];

        if(isset($_POST['button'])) {
            # Select from `mail` table information in MailList request
            $listOfMail = DB::run()->query("SELECT * FROM mail")->fetchAll(PDO::FETCH_OBJ);

            foreach($listOfMail as $item):
                $mail =  $item->mail;
                $login = $item->login;

                mail("$mail", "Сообщение от сайта www.дива-пермь.рф", "Приветствуем дорогой подписчик -  $login \n".$post['message']."");
            endforeach;

        }

        Redirect::to('index');
    }
}
