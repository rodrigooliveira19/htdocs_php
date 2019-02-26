<?php 

namespace Cliente; 

	class Cadastro extends \Cadastro{

		public function registrarVenda(){
			echo "Venda realizada para o Cliente: ".$this->getNome();

		}
	}
 ?>