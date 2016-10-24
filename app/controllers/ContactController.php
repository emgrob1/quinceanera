<?php

class ContactController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		echo $this->view->render('contact', 'index');
    }

}

