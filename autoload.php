<?php
	/*estou armazenando esta função 
	realpatch(dirname(__FILE__)); dentro do define("CAMINHO")*/
	define("CAMINHO", realpath(dirname(__FILE__)));

	$diretorios = array(

		CAMINHO . PATH_SEPARATOR . "controllers" 	. PATH_SEPARATOR,
		CAMINHO . PATH_SEPARATOR . "core" 			. PATH_SEPARATOR, 
		CAMINHO . PATH_SEPARATOR . "models" 		. PATH_SEPARATOR,
		CAMINHO . PATH_SEPARATOR . "views" 			. PATH_SEPARATOR,
		get_include_path()	
	);
	set_include_path(implode(PATH_SEPARATOR, $diretorios));


	//função __autoload já não se usar mais no php 7 
	// function __autoload($classe){
	// 	require $classe .'.php';
	// }

	// função que substituio o __outoload -> spl_autoload_register()
	// function autoload ($classe) {
	// 	include($classe . ".php");
	// }
	// spl_autoload_register("autoload");


    //scrip esta funcionado só é mais uma forma de fazer o autoload.
	spl_autoload_register(
		function($classe){
			require $classe . ".php";
		}	
	);


	// require "core/core.php";
	// include 'core/controller.php';
	// include 'controllers/homeController.php';
	// include 'controllers/clienteController.php';
	// include 'views/cliente.php';
