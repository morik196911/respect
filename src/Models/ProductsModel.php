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

	public function getAllProducts(): ?array
	{
		return $this->getAll();
	}

	public function getOneProduct($field_1, $value_1, $field_2, $value_2): ?array {
		return $this->getDoubleFieldRow($field_1, $value_1, $field_2, $value_2);
	}

}//