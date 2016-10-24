<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;

$form = new Form();

$form->add(
new Text
("Attending")
);

$form->add(
new Text
("Number Of Guest")
);

$form->add(
new Text
("First Name")
);

$form->add(
new Text
("Last Name")
);

$form->add(
new Text
("Street Address")
);

$form->add(
new Text
("Street Address Line 2")
);

$form->add(
new Text
("City")
);

$form->add(
new Text
("State")
);

$form->add(
new Text
("Zip")
);

$form->add(
new Text
("Email")
);

$form->add(
new Text
("Phone Number")
);

