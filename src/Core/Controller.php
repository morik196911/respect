<?php
namespace App\Core;

use App\Views\View;
use App\Core\Format;
use App\Models\MenuModel;
use App\Models\CorpusModel;
use App\Models\SofasModel;
use App\Models\HromModel;

abstract class Controller {

 protected $view;
 protected $format;
 protected $data ;
 protected $menuModel;
 protected $corpusModel;
 protected $sofasModel;
 protected $hromModel;

	public function __construct() {
      $this->menuModel = new MenuModel();
	  $this->sofasModel = new SofasModel();
	  $this->corpusModel = new CorpusModel();
	  $this->hromModel = new HromModel();
	  $this->format = new Format();
	  $this->data = $this->format->sanitizeXss($_REQUEST);
      $this->view = new View(__DIR__ . '/../../templates' );
	  $this->view->set('content', $this->getContent());
      $this->view->set('menu', $this->menuModel->getAllMenu());
	  $this->view->set('corpus', $this->corpusModel->getAllCorpus());
	  $this->view->set('sofas', $this->sofasModel->getAllSofas()); 
      $this->view->set('hrom', $this->hromModel->getAllHrom());
	  $this->view->renderHtml('main.php');
	}
  abstract protected function getContent();
}//