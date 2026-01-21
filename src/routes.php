<?php
return [
	'#^/$#' => [\App\Controllers\MainController::class, 'getContent'],
	'#^/about$#' => [\App\Controllers\AboutController::class, 'getContent']
];