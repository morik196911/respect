<?php
namespace App\Models;

use App\Core\GlobalClass;
/* 
Работа с БД Универсальный класс для
вывода таблиц product_.......
*/
class ProductsModel extends GlobalClass {

	public function __construct($table_name)
	{
		parent::__construct($table_name);
	}

	public function getAllProducts()
	{
		return $this->getAll();
	}

}//