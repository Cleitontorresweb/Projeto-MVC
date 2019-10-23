<?php 


	class clienteController extends Controller{
		//Criando os metados
		public function index(){
			//echo "Olá, eu sou o Controller Cliente";
			$this->load("cliente"); 
		} 

		public function cadastrar(){
			$curso = new curso();
			$curso->setDescricao = "Cuso de Java"; 
			$curso->setValor = (297);


			$dado["curso"] = $curso->getDescricao();
			$dado["valor"] = $curso->getValor();

			$this->load("cliente", $dados);


		}

	}