<?php
session_start();
class ThankyouController extends \Phalcon\Mvc\Controller {

	public function indexAction() {
		if ($_SESSION['auth'] == 'auth') {

			
		} else {
			header('location:/georginaquinceanera/login');
		}
	}

}
