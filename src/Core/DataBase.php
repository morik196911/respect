<?php

namespace App\Core;

use mysqli;
use Exception;
use App\Core\Config;

class DataBase
{
	static private $db = null;
	private $mysqli;

	private function __construct()
	{

		$this->mysqli = new mysqli(
			Config::$host,
			Config::$user,
			Config::$password,
			Config::$dbname
		);

		if ($this->mysqli->connect_error) {
			throw new Exception('Connection failed: ' . $this->mysqli->connect_error);
		}

		$this->mysqli->set_charset('utf8mb4');
	}


	public static function getInstance(): DataBase
	{
		if (self::$db == null) self::$db = new DataBase();
		return self::$db;
	}


	public function other_query($sql)
	{
		try {
			$result_set = $this->mysqli->query($sql);
			if (!$result_set) throw new Exception($this->mysqli->error . " ошибка в запросе");
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function getMysqli()
	{
		return $this->mysqli;
	}

	public function select($query)
	{
		try {
			$result_set = $this->mysqli->query($query);
			if (!$result_set) throw new Exception($this->mysqli->error . " произошла ошибочка");
			return $this->resultSetToArray($result_set);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function selectRow($query)
	{
		$result_set = $this->mysqli->query($query);
		if ($result_set->num_rows != 1) return false;
		return $result_set->fetch_assoc();
	}

	public function selectCell($query)
	{
		$result_set = $this->mysqli->query($query);
		if (!$result_set || $result_set->num_rows != 1) return false;
		$row = $result_set->fetch_assoc();
		mysqli_free_result($result_set);
		$row = array_values($row);
		return $row[0];
	}


	private function resultSetToArray($result_set)
	{
		$good = [];
		while (($row = $result_set->fetch_assoc()) != false) {
			$good[] = $row;
		}
		mysqli_free_result($result_set);
		return $good;
	}


	public function __destruct()
	{
		if (isset($this->mysqli)) $this->mysqli->close();
	}
}//