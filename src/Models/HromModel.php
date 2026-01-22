<?php

namespace App\Models;

use App\Core\GlobalClass;
/*
Работа с БД. Hrom.
*/

class HromModel extends GlobalClass
{

	public function __construct()
	{
		parent::__construct('category_hrom');
	}

	public function getAllHrom()
	{
		return $this->getAll();
	}
}
