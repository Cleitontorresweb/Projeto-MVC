<?php 

 class controller{
 	public function load($nomeDaView, $dadosDaView = array()){

 		include 'views/'. $nomeDaView .".php" ;

 	}
 } 


