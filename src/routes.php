<?php
return [
	'#^/$#' => [\App\Controllers\MainController::class, 'getContent'],
	'#^/about$#' => [\App\Controllers\AboutController::class, 'getContent'],
	'#^/category/(kitchens|livings|small|cabinets|hallways|)$#'
	 => [\App\Controllers\ProductsController::class, 'getContent'],
];