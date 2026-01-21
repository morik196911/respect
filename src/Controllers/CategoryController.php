<?php
namespace App\Controllers;

use App\Core\Controller;

class CategoryController extends Controller {

	protected function getContent(): string{
		
		return '/category/index.php';
	}
}