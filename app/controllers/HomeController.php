<?php
session_start();
class HomeController extends \Phalcon\Mvc\Controller {

	public function indexAction() 
	{
		if ($_SESSION['auth'] == 'auth') {
			$this -> view -> render('home', 'index');

		} else {

			header('location:/georginaquinceanera/login');
		}

	}

}
