<?php
session_start();
use Phalcon\Mvc\Url;
class RsvpController extends \Phalcon\Mvc\Controller {
	public function indexAction() {
		//$this->var = $this->getCreds();
		if ($this -> session -> has("auth")) {

			$this -> checkRsvpAction();
		} else {
			header('location:/georginaquinceanera/login');
		}
	}

	private function checkRsvpAction() {
		if (!$this -> request -> isPost()) {
			// get data from user
			$email = $_SESSION['email'];
			// find user in database
			$user = Rsvp::findFirst(array("email = :email:", "bind" => array("email" => $email, )));

			if ($user != FALSE) {
				header('location:/georginaquinceanera/editrsvp');
			} else {
				header('location:/georginaquinceanera/creatersvp');
			}
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
