<?php
namespace App\Models;

use App\Core\GlobalClass;

class MenuModel extends GlobalClass {

	public function __construct()
	{
		parent::__construct('menu');
	}

	public function getAllMenu() {
		return $this->getAll();
	}
}