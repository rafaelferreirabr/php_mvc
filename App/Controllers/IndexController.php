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
		$product = Container::getModel("Product");
		$data['name'] = "Mouse";
		$data['price'] = 10;
		$product->setAttributes($data);
		$product->store($product);
	}
	public function products()
	{
		$product = Container::getModel("Product");
		$this->view->products = $product->fetchAll();

		$this->render("products");
	}
	
}