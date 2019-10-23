<?php 

class core{
	public function run(){

		$paramentos = array();

		$url = explode("index.php", $_SERVER["PHP_SELF"]);
		$url = end($url);

	    

		if ($url != "") {
			$url = explode("/", $url);
			array_shift($url);

			$controllerAtual = $url[0];


			if (isset($url[0]) && $url[0] != "" ) {
					$actionAtual = $url[0];
					array_shift($url);
				}else{
					$actionAtual = "index";
				}	

			if (count($url) > 0 ) {
					$paramentos = array_filter($url);
				}	
			
		}else{
			$controllerAtual = "homeController";
			$actionAtual	 = "index";
		}

		require_once 'core/controller.php';

		$obj = new $controllerAtual();
		call_user_func_array(array($obj, $actionAtual), $paramentos);

	}	
}
