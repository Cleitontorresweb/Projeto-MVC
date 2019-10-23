<?php 

 class controller{
 	public function load($nomeDaView, $dadosDaView = array()){
 		extract($nomeDaView);
 		include 'views/'. $nomeDaView.".php" ;

 	}
 } 