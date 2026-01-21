<?php

namespace App\Models;

use App\Core\GlobalClass;

class CorpusModel extends GlobalClass
{

	public function __construct()
	{
		parent::__construct('category_corpus');
	}

	public function getAllMenu()
	{
		return $this->getAll();
	}
}
