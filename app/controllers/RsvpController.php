<?php

class RsvpController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		echo $this->view->render('rsvp', 'index');
    }

}

