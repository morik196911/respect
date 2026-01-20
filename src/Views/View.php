<?php
namespace App\Views;

use App\Core\Config;

class View
{
	private $data = [];
	private $templatePath;

	public function __construct(string $templatePath)
	{
		$this->templatePath = $templatePath;
	}

	public function renderHtml(string $templateName, array $vars = [], $code = 200)
	{
		http_response_code($code);
		extract($vars);
		ob_start();
		include $this->templatePath . Config::$ds . $templateName;
		$buffer = ob_get_contents();
		ob_end_clean();
		echo $buffer;
	}

	public function set($name, $value)
	{
		$this->data[$name] = $value;
	}

	public function delete($name)
	{
		unset($this->data[$name]);
	}

	public function __get($name)
	{
		if (isset($this->data[$name])) return $this->data[$name];
		return "";
	}
}//