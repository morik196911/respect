<?php
namespace App\Controllers;

use App\Core\Controller;

class ProductController extends Controller {

	public function getContent(): string{
		

		return '/products/index.php';
	}
}