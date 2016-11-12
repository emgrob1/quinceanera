<?php
session_start();
class SampleFormController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		//$this->view->form = new RsvpForm();
	echo $this->view->render('sampleForm', 'index');
    }

	public function testAction()
	{
		echo 'test';
	}

}

