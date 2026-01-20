<?php
namespace App\Core;

use App\Views\View;
use App\Core\Format;

abstract class Controller {

 protected $view;
 protected $format;
 protected $data ;
	public function __construct() {

	  $this->format = new Format();
	  $this->data = $this->format->sanitizeXss($_REQUEST);
      $this->view = new View(__DIR__ . '/../../templates' );
	  $this->view->set('content', $this->getContent());

	  $this->view->renderHtml('main.php');
	}
  abstract protected function getContent();
}//