<?php
namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller {

	public function getContent(): string {

      return '/about/index.php';
	}
} 