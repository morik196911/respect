<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\ProductsModel;
/* 
Вывод единичного продукта
*/
class ProductController extends Controller {

	public function getContent(): string {

	$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$parts = explode('/', trim($path, '/'));
	print_r($parts);
	 $table_name = $parts[1];
	$field = $parts[2];
	$id = $parts[3];
    
	$productsModel = new ProductsModel('product_' . $parts[1]);
    $product = $productsModel->getOneProduct('link', $field, 'id', $id);
		//print_r($productsModel->getOneProduct($field, $id));
	$this->view->set('name', $product['name'] );
	$this->view->set('description', $product['description']);
	$this->view->set('images', $product['images']);
		return '/product/index.php';
	}
}