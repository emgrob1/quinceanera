<?php
session_start();
use Phalcon\Mvc\Url;
class RsvpController extends \Phalcon\Mvc\Controller {
	public function indexAction() {
		if ($_SESSION['auth'] == 'auth') {

			
		} else {
			header('location:/georginaquinceanera/login');
		}
	}

	public function submitAction() {
		$rsvp = new Rsvp();
		$success = $rsvp -> save($this -> request -> getPost(), array('attending', 'number_of_guest', 'first_name', 'last_name', 'address_line_1', 'address_line_2', 'city', 'state', 'zip', 'phone_number', 'email'));
		if ($success) {
			header('location:/georginaquinceanera/thankyou');
		} else {
			echo "Sorry, the following problems were generated: ";

			$messages = $user -> getMessages();

			foreach ($messages as $message) {
				echo $message -> getMessage(), "<br/>";
			}
		}

		$this -> view -> disable();
	}

}
