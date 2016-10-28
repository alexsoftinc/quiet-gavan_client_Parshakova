<?php
class Login extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->render('login/index');
	}

	function goAdmin()
	{
		# hash password this from standart MD 5 protokol				
		$arr = array();

		$arr['login'] 	 = $_POST['login'];
		$arr['password'] = md5($_POST['password']);


		$query = DB::run()->prepare("SELECT id,login,role FROM user_admin WHERE login = :login AND password = :password");

        $query->execute([
            ':login'     => $arr['login'],
            ':password' => $arr['password']
        ]);

        $data = $query->fetch(PDO::FETCH_OBJ);

        //Если результат больше 0
        $count = $query->rowCount();

        if($count > 0) {
            //Login action here            
            Session::set('logged', true);
            Session::set('role', $data->role);                        
            Session::set('login', $data->login);
            Session::set('user_id', $data->id);
            Redirect::to('index'); //Это то же самое что header('Location: /login');
        } else {
            throw new Exception('Не могу авторизовать пользователя');
        }
	}

	function logout()
	{
	    Session::logout();    
	}
}
