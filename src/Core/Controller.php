<?php
namespace App\Core;

use App\Views\View;
use App\Core\Format;
use App\Models\MenuModel;
use App\Models\CorpusModel;
use App\Models\SofasModel;
use App\Models\HromModel;
/*  
Вывод главной страницы
*/
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
  /* 
   Получение названий категорий
  */
	protected function getAllName(string $fieldName): ?array {

		$sofas = $this->sofasModel->getAllFieldSofas($fieldName) ?? [];
		$corpus = $this->corpusModel->getAllFieldCorpus($fieldName) ?? [];
		$hrom = $this->hromModel->getAllFieldHrom($fieldName) ?? [];
		$combined = array_merge($sofas, $corpus, $hrom);
		$values = array_column($combined, $fieldName);
		return array_values(array_unique($values));
	}

  abstract protected function getContent();
}//