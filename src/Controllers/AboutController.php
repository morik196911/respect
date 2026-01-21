<?php
namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller {

	protected function getContent(): string {

      return '/about/index.php';
	}
} 