<?php 

namespace App\Controllers;

Class IndexController
{
	public function index()
	{
		$cars = array("Mustang","Ferrari");
		include_once "../App/Views/index/index.phtml";
	}

	public function contact()
	{
		$cars = array("Mustang","Ferrari");
		include_once "../App/Views/index/contact.phtml";
	}
}