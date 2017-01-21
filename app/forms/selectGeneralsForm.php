<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Numericality;

class selectGeneralsForm extends Form
{
	public function initialize(){
		$form = new Form();
		$form->add(
		    new Text(
		        "name"
		    )
		);
		
	
	
	
	$form->add(
    new Select(
        "army_names",
       array(
            "1" => "Army of The Potomac",
            "2" => "Army of Northern Virginia",
        )
    )
);
	}
}