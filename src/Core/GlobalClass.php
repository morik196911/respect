<?php

namespace App\Core;

use App\Core\DataBase;

abstract class GlobalClass
{
	protected $db;
	protected $table_name;

	public function __construct($table_name)
	{
		$this->db = DataBase::getInstance();
		$this->table_name = $table_name;
	}

	/*выбрать всё*/
	protected function getAll($v = true)
	{
		$query = "SELECT * FROM " . $this->table_name . " WHERE `visible` = $v ";
		return $this->db->select($query);
	}

	/*Вывод одной строки*/
	protected function getFieldRow($field, $value, $v = true)
	{
		$query = "SELECT * FROM " . $this->table_name . " WHERE `$field` = '$value' AND `visible` = $v ";
		return $this->db->selectRow($query);
	}
}//