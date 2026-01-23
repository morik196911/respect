<?php
return [
	'#^/$#' => [\App\Controllers\MainController::class, 'getContent'],
	'#^/about$#' => [\App\Controllers\AboutController::class, 'getContent'],
	'#^/products/([a-z]+)$#' => [\App\Controllers\ProductsController::class, 'getContent'],
];