<?php
session_start();
class RegisterController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

	}
     
	 public	function SubmitAction()
	 {
	 	
		echo 'sumbit';
	 	$user = new Users();
		
		$success = $user->save(
		$this->request->getPost(), array(
		'name',
		'email',
		'username',
		'password',
		));
		  if ($success) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems were generated: ";

            $messages = $user->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

	  
	 }
}

