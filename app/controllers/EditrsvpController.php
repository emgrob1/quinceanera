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
		$email_temp = $_SESSION['password'];
		$rsvp = Rsvp::findFirst( "email = '$email_temp'");
		
		//$success = $rsvp -> save($this -> request -> getPost());
		//$success = $rsvp -> update($this->request->getPost(), array('first_name', 'last_name'));
		$success = $rsvp -> update($this -> request -> getPost(), array('attending', 'number_of_guest', 'first_name', 'last_name', 'address_line_1','address_line_2', 'city', 'state', 'zip', 'phone_number','email'));
		if ($success) {
		$this->sendEmail();
			header('location:/georginaquinceanera/thankyou');
			
		} else {
			echo "Sorry, the following problems were generated: ";


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

	private function sendEmail()
	{
			
		$attending = $this->request->getPost('attending');
		
		if ($attending == 1)
		{$attending = "Yes";}
		else
		{$attending = "No";}
		$number_of_guest = $this->request->getPost('number_of_guest');
		$first_name = $this->request->getPost('first_name');
		$last_name = $this->request->getPost('last_name');
		$address_line_1 = $this->request->getPost('address_line_1');
		$address_line_2 = $this->request->getPost('address_line_2');
		$city = $this->request->getPost('city');
		$state = $this->request->getPost('state');
		$zip = $this->request->getPost('zip');
		$phone_number = $this->request->getPost('phone_number');
		$email = $this->request->getPost('email');
	
		 if ($address_line_2 != '')
		{
		$line_2 = '<p>Street Address Line 2: '.$address_line_2.' </p>';	
		} 
		
		$the_message = '<p>Thank you for sending in your revised RSVP below is a summary of your RSVP: </p>'.
		'<p>Attending: '.$attending.' </p>' .
		'<p>Number of Guest: '.$number_of_guest.' </p>' . 
		'<p>First Name: '.$first_name.' </p>' . 
		'<p>Last Name: '.$last_name.' </p>' . 
		'<p>Street Address: '.$address_line_1.' </p>' .
		$line_2	.	
		'<p>City: '.$city.' </p>' . 
		'<p>State: '.$state.' </p>' . 
		'<p>Zip: '.$zip.' </p>' . 
		'<p>Contact Number: '.$phone_number.' </p>' . 
		'<p>Email: '.$email.' </p>' .
		
		'<p>Need to revise your RSVP? Here a link:  <a href="http://georginagrobquinceanera.com/editrsvp">Edit RSVP </a>  </p>' 
		;
			$to = $_SESSION['password'];
			
			$subject = 'Quinceanera RSVP-Edited';
			
			$message = $the_message;
			
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			
			// More headers
			$headers .= 'From: Evan Grob<emgrob1@yahoo.com>' . "\r\n";
			
			
			
		mail($to,$subject,$message,$headers);
			
	}

}

