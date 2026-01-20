<?php
namespace App\Core;

use App\Views\View;

abstract class Controller {

 protected $view;

	public function __construct() {
      $this->view = new View(__DIR__ . '/../../templates' );
	  $this->view->set('content', $this->getContent());

	  $this->view->renderHtml('main.php');
	}
  abstract protected function getContent();
}//