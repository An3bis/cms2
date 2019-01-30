<?php 
namespace Engine;

class Controller
{
	public function loadController(string $controllerName)
	{
		if(file_exists($this->getControllerPath($controllerName)))
			require_once $this->getControllerPath($controllerName);
		else throw new \Exception('File doesnt exists');		
	}

	private function getControllerPath(string $controllerName) : string
	{
		return ROOT.'controller/'.$controllerName.'.controller.php';
	}	
}