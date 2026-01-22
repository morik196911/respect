<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\ProductsModel;

class CategoryController extends Controller {

	public function getContent(): string{
		// Получаем часть URL после /category/
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$parts = explode('/', trim($path, '/'));
		if (isset($parts[1]) && in_array($parts[1],
		 ['kitchens', 'livings', 'small', 'cabinets', 'hallways'])) {
			$category = $parts[1];
		}
		$productsModel = new ProductsModel('product_' . $parts[1]);

		$this->view->set('products', $productsModel->getAllProducts());
		$this->view->set('category', $category);

		return '/category/index.php';
	}
}