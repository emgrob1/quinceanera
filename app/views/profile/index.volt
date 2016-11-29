<?php

use Phalcon\Mvc\Url;

$url = new Url();

echo $url->getBaseUri();

$url->setBaseUri("http://localhost/georginaquinceanera/home");

echo $url->getBaseUri();
?>
