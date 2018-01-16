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
		$client = Container::getModel("Client");
		$this->view->clients = $client->find(3);
		$this->render("contact");

	}
	public function store()
	{
		$client = Container::getModel("Client");
		$data['id'] = 5;
		$data['name'] = "amarildo";
		$data['email'] = "Amarildo@example.com";
		$client->setAttributes($data);
		$this->view->clients = $client->store($client);
		return " Cliente gravado com sucesso!!";
	}

	
}