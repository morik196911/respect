<?php
namespace App\Core;

use App\Views\View;
use App\Core\Format;
use App\Models\MenuModel;
use App\Models\CorpusModel;

abstract class Controller {

 protected $view;
 protected $format;
 protected $data ;
 protected $menuModel;
 protected $corpusModel;

	public function __construct() {
      $this->menuModel = new MenuModel();
	  $this->corpusModel = new CorpusModel();
	  $this->format = new Format();
	  $this->data = $this->format->sanitizeXss($_REQUEST);
      $this->view = new View(__DIR__ . '/../../templates' );
	  $this->view->set('content', $this->getContent());
      $this->view->set('menu', $this->menuModel->getAllMenu());
	  $this->view->set('corpus', $this->corpusModel->getAllMenu());

	  $this->view->renderHtml('main.php');
	}
  abstract protected function getContent();
}//