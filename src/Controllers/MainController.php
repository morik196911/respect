<?php
namespace App\Controllers;

use App\Core\Controller;

class MainController extends Controller {

protected $title = 'Морозов-мебель';

	public function getContent(): string {

      return '/main/index.php';
	}
} 