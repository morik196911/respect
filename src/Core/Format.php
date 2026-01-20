<?php

namespace App\Core;

class Format
{
	/**
	 * Очищает данные от XSS-уязвимостей.
	 * @param mixed $data Входные данные (строка или массив)
	 * @return mixed Очищенные данные
	 */

	public function sanitizeXss($data)
	{
		if (is_array($data)) {
			$good = [];
			foreach ($data as $k => $v) {
				$good[$k] = $this->sanitizeXss($v);
			}
			return $good;
		}

		if (!is_string($data)) {
			return $data;
		}

		return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
	}
}//