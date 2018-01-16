<?php 

namespace App\Controllers;

Class IndexController
{
	private $view;

	public function __construct()
	{
		$this->view = new \stdClass;
	}

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

	public function render($action)
	{
		$current = get_class($this);
		$singleClassName = strtolower(str_replace("Controller", "", str_replace("App\\Controllers\\","", $current )));
		include_once "../App/Views/".$singleClassName."/".$action.".phtml";
	}
}