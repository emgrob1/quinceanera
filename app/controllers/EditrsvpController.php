<?php
session_start();
class EditrsvpController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		if($_SESSION['auth'] == 'auth')
    	{
		
		$this->editAction();
		}
		else 
		{
				 header('location:/georginaquinceanera/login');	
		}
    }

	private function editAction($email)
	{
		if (!$this->request->isPost())
		{
		$editForm = rsvp::findFirstById($email);
		
		
		if(!$editForm)
		{
			 header('location:/georginaquinceanera/creatersvp');	
		}
		
		{
			echo $this->view->render('editrsvp', 'index');
			
		}	
	}
	}
	


}

