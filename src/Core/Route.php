<?php
namespace App\Core;

class Route
{

	public static function run($uri, $routes): void
	{
		$isRouteFound = false;

		foreach ($routes as $pattern => $controllerAndAction) {
			preg_match($pattern, $uri, $matches);

			if (!empty($matches)) {
				$isRouteFound = true;
				break;
			}
		}

		if (!$isRouteFound) {
			echo 'Page is not found';
			return;
		}
		unset($matches[0]);

		$controllerName = $controllerAndAction[0];
		$actionName = $controllerAndAction[1];

		$controller = new $controllerName();
		echo $controller->$actionName(...$matches);
	} 

}//