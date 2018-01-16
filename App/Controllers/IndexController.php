<?php 

namespace App\Controllers;

use SON\Controller\Action;
use App\Models\Client;
use App\Conn;

Class IndexController extends Action
{
	
	public function index()
	{
		$db = Conn::getDb();
		$client = new Client($db);
		$this->view->clients = $client->fetchAll();
		$this->render("index");
	}

	public function contact()
	{
		$this->view->cars = array("Mustang","Ferrari");
		$this->render("index");

	}

	
}