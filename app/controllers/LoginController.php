<?php

class LoginController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		echo $this->view->render('login', 'index');
    }
	
	public function submitAction()
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
				 $this->_registerSession($user);
				
			// forward to home if user is valid
			return $this->dispatcher->forward(
			
			array(
			"controller" => "home",
		    "action"     => "index"
			)
			);
			 }
		}
	$this->flash->error
	(
         "Wrong information"
     );
	 // Forward to the login form again
        return $this->dispatcher->forward(
            array(
                "controller" => "login",
                "action"     => "index",
            )
        );
	 
	 
	}

	public function loginAction()
	{
		echo 'howdy';
        return $this->dispatcher->forward(
            array(
                "controller" => "home",
                "action"     => "index",
            )
        );
	}

	}

