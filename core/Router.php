<?php 
/*
No longer need $uriBrowser in the definition of the functions

*/
class Router
{
	protected $arguments = null;
	public function __construct(){
		$this->arguments = $this->getUrl($_SERVER['REQUEST_URI']);
	}
	public function direct($uri, $controllerAcrion, $getValue, $uriBrowser)
	{	
		if ($uri == $this->arguments['uri']) {
	
			$contollerArr = explode("@", $controllerAcrion);
			
			return $this->callAction($contollerArr[0], $contollerArr[1], $this->arguments['getValue']);
		}
	}
	
	public function get() { throw new \Exception("Not implemented yet");}
	public function post() { throw new \Exception("Not implemented yet");}
	public function delete() { throw new \Exception("Not implemented yet");}

	protected function callAction($controller, $action, $getValue)
	{
		
		$controller = new $controller;
		if (! method_exists($controller, $action)) {
			throw new Exception("No controller or action");
		}
		
		return $controller->$action($this->arguments['getValue']);
	}
	
	protected	function getUrl($requestUri)
	{
		$uri = trim(trim(parse_url($requestUri, PHP_URL_PATH), "/"));


		$uriArr = explode("/", $uri);
		
		$uriResult = [];

		$uriResult['uri'] = $uriArr[0] . "/" . "list";
		$uriResult['getValue'] = NULL;

/** DO NOT HARD CODE THOSE VALUES! WHAT WILL HAPPEND IF I WANT TO EXTEND THE API?  */*
		if (in_array($uriArr[0],['jobs','candidates') &&$uriArr[1] != "list") {
			$uriResult['uri'] = $uriArr[0] . "/" . $uriArr[1];
			$uriResult['getValue'] = $uriArr[2];
		} 


		return $uriResult;
	}
}