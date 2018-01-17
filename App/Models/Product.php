<?php

namespace App\Models;

use SON\Model\Table;

class Product extends Table
{
	protected $table = "products";
	protected $id;
	protected $name;
	protected $price;
}