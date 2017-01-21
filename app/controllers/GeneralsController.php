<?php

class GeneralsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$this->view = new selectGeneralsForm();
		
		$this->viewAction();
    }

	
	private function viewAction(){

$test =	$this->view->getUsers = Army::find();	
		//$temp_name = $this->setVar('army_names');
		//$temp_name = 'Army of Northern Virginia';
		var_dump ($test);
	$name = 'Army of The Potomac';
//	$name = 'Army of Northern Virginia';
		$this->get_id_of_name($name);
	}


		
	
		private function selectGeneral()
		{
			$army = 'Amy of Northern Virginia';
			
		}
		
		private function get_id_of_name($name){
				$armyName = $name;
				$name = Army::findFirst("army_name = '$armyName'");
				
			$id = $name->army_id;
			$this->viewPage($id);
		}
		
		private function viewPage($army_id)
	{
	 	$temp = $army_id;
		$generals = Generals::findFirst("army_id = '$temp'");
		$this->view->post = $generals;
		
	}
}

