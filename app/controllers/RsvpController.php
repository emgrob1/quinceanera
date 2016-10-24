<?php

use Phalcon\Mvc\Url;
class RsvpController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
			// authentication page
			return $this->response->redirect('profile');
			// page will collect the email address
			// gather input 
			
			$email = 'emgrob1@yahoo.com';
			$first_name = $this->request->getPost('first_name');
			
			// search db to find existing rsvp
			
			$email  = RsvpData::findFirst(array(
				"email  = :email:",
				"bind"  => array(
				"email" => $email,
				)
			));
			 if($email != FALSE)
			 {
			 	$url = new Url();
			 	echo 'found it';
				$this->view->disable();
                $this->response->redirect('thankyou');
			}
			 else
			 	{
			 		echo 'no where to be found';
			 	}
		
    	// return $this->response->redirect('login', 'index');
		// echo $this->view->render('rsvp', 'index');
    }
	
	public function submitAction()
	{
			
		if($this->request->isPost())
		{
			// gather input 
			$attending = $this->request->getPost('attending');
			$number_of_guest = $this->request->getPost('num_of_guest');
			$email = $this->request->getPost('email');
			$first_name = $this->request->getPost('first_name');
			
			// search db to find existing rsvp
			
			$email  = RsvpData::findFirst(array(
				"email  = :email:",
				"bind"  => array(
				"email" => $email,
				)
			));
			 if($email != FALSE)
			 {
			 	$url = new Url();
			 	echo 'found it';
				$this->view->disable();
                $this->response->redirect('thankyou');
			}
			 else
			 	{
			 		echo 'no where to be found';
			 	}
		}
		
	}

}

