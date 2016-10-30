<?php

session_start();

class LoginController extends \Phalcon\Mvc\Controller
{
	
    public function indexAction()
    {
    	 
    }

	

	public function loginAction()
	{
	// find user in database
		if($this->request->isPost())
		{
			// get data from user
			$username    = $this->request->getPost('username');
			$password    = $this->request->getPost('password');
			// find user in database
			$user = Users::findFirst(array(
			 "username = :username: AND password = :password: AND active = 'Y'",
			"bind" => array(
			"username" => $username,
			"password" => $password,
			)
			
			));
			
			 if($user != FALSE)
			 {
				 
				$_SESSION['auth'] = 'auth';
			// forward to home if user is valid
				header('location:/georginaquinceanera/home');
				
			}
			else
			{
	  			header('location:/georginaquinceanera/login');
			}
		}
	}
	
	
	
}

