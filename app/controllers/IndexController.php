<?php
session_start();
class IndexController extends ControllerBase {

	public function indexAction() 
	{
		 header('location:/georginaquinceanera/login');
	}

	
}
