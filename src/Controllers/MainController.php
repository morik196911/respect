<?php
namespace App\Controllers;

use App\Core\Controller;

class MainController extends Controller {

	public function getContent(): string {

      return '/main/index.php';
	}
} 