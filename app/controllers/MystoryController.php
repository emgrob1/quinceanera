<?php
session_start();
class MystoryController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
if($_SESSION['auth'] == 'auth')
    	{
		echo $this->view->render('mystory', 'index');
		
		}
		else 
		{
				 header('location:/georginaquinceanera/login');	
		}
    }

}

