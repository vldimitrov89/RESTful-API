<?php 

class Router
{
	public function direct($uri, $controllerAcrion, $getValue, $uriBrowser)
	{

		// var_dump($uri);
	
		if ($uri == $uriBrowser) {
	
		$contollerArr = explode("@", $controllerAcrion);
		
		return $this->callAction($contollerArr[0], $contollerArr[1], $getValue);
		}
	}

	protected function callAction($controller, $action, $getValue)
	{
		
		$controller = new $controller;
		if (! method_exists($controller, $action)) {
			throw new Exception("No controller or action");
		}
		
		return $controller->$action($getValue);
	}
}