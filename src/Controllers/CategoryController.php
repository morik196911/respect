<?php
namespace App\Controllers;

use App\Core\Controller;

class CategoryController extends Controller {

	public function getContent(): string{
		// Получаем часть URL после /category/
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$parts = explode('/', trim($path, '/'));
		if (isset($parts[1]) && in_array($parts[1],
		 ['kitchens', 'livings', 'small', 'cabinets', 'hallways'])) {
			$category = $parts[1];		
		} 

		$this->view->set('category', $category);
		
		return '/category/index.php';
	}
}