<?php

class IndexController extends ControllerBase {

	public function indexAction() 
	{
		return $this->response->redirect('login', 'index');
	}

	public function continueAction()
	{
		echo $this->view->render('index', 'index');
	}
}
