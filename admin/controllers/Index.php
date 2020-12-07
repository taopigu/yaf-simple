<?php

class IndexController extends Yaf\Controller_Abstract{
	
    public function indexAction(){
	echo "Hello world";
	$this->render("index");		
    }
}
