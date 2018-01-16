<?php
namespace App;

use SON\Init\Bootstrap;

Class Route extends Bootstrap
{
	

	protected function initRoutes()
	{
		$routes['home'] = array('route' =>'/','controller'=>'indexController','action'=>'index');
		$routes['contact'] = array('route' =>'/contact','controller'=>'indexController','action'=>'contact');
		$this->setRoutes($routes);
	}

	
}