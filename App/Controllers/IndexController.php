<?php 

namespace App\Controllers;

use SON\Controller\Action;

Class IndexController extends Action
{
	
	public function index()
	{
		$this->view->cars = array("Mustang","Ferrari");
		$this->render("index");
	}

	public function contact()
	{
		$this->view->cars = array("Mustang","Ferrari");
		$this->render("index");

	}

	
}