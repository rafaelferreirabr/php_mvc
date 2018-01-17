<?php
namespace App;

use SON\Init\Bootstrap;

Class Route extends Bootstrap
{

	protected function initRoutes()
	{
		$routes['home'] = array('route' =>'/','controller'=>'indexController','action'=>'index');
		$routes['contact'] = array('route' =>'/contact','controller'=>'indexController','action'=>'contact');
		$routes['store'] = array('route' =>'/store','controller'=>'indexController','action'=>'store');
		$routes['products'] = array('route' =>'/products','controller'=>'indexController','action'=>'products');
		$this->setRoutes($routes);
	}

	
}