<?php

namespace App\Models;

use App\Core\GlobalClass;
/*
Работа с БД. Sofas.
*/

class SofasModel extends GlobalClass
{

	public function __construct()
	{
		parent::__construct('category_sofas');
	}

	public function getAllSofas()
	{
		return $this->getAll();
	}
}
