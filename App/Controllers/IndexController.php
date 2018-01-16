<?php 

namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

Class IndexController extends Action
{
	
	public function index()
	{
		$client = Container::getModel("Client");
		$this->view->clients = $client->fetchAll();

		$this->render("index");
	}

	public function contact()
	{
		$this->view->cars = array("Mustang","Ferrari");
		$this->render("index");

	}

	
}