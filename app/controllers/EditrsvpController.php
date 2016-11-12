<?php
session_start();
class EditrsvpController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		if($_SESSION['auth'] == 'auth')
    	{
			$this->viewPage();
		}
		else 
		{
				 header('location:/georginaquinceanera/login');	
		}
    }

	public function editAction()
	{
		$rsvp = Rsvp::find('id = 13');
		$success = $rsvp -> update($this -> request -> getPost());
		
	//	$success = $rsvp -> update($this -> request -> getPost(), array('attending', 'number_of_guest', 'first_name', 'last_name', 'address_line_1', 'address_line_2', 'city', 'state', 'zip', 'phone_number', 'email'));
		if ($success) {
			header('location:/georginaquinceanera/thankyou');
		} else {
			echo "Sorry, the following problems were generated: ";

			$messages = $user -> getMessages();

			foreach ($messages as $message) {
				echo $message -> getMessage(), "<br/>";
			}
		}

	}
	
	private function viewPage()
	{
		$email_temp = $_SESSION['password'];
		$rsvp = Rsvp::findFirst( "email = '$email_temp'");
		
		$this->view->post = $rsvp;
	}

	

}

