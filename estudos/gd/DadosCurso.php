<?php 


class DadosCurso
{

	public static function getTitle(){

		$title = "CERTIDAO DE CONCLUSAO DE CURSO";
		return $title; 
	}

	public static function getTexto(){

		#Variaveis. 
		$nome = "RODRIGO SILVA DE OLIVEIRA"; 
		$rg = "1350678200"; 
		$cpf = "04236520906"; 
		$diaNascimeto = "19";
		$mesNascimento = "10"; 
		$anoNascimento = "1995"; 
		$mae = "Janete Santos Silva"; 
		$pai = "Antonio Santos Silva"; 

		$curso = "Analise e Desenvolvimento de Sistemas"; 
		$semestre = "2º"; 
		$anoConclusão = "19"; 
		$cargaHoraria = "3600";

		$data = new DateTime("-20 year"); 
		$dataPortaria = $data->format("d-m-y"); 
		$dataInterval = new DateInterval("P1D"); 
		$data->add($dataInterval);
		$dataPublicacao = $data->format("d-m-y");  
		$dataInterval = new DateInterval("P2D"); 
		$data->add($dataInterval);
		$dataPublicacaoMinisterio = $data->format("d-m-y"); 

		$dataColacaGrau = date("d-m-y"); 
		$data = new DateTime("-4 hour"); 
		$dataAtual = $data->format("d M Y "); 

		$texto = "Certificamos, a pedido do(a) interessado(a) ".$nome.", nacionalidade ".'<br />'." brasileira, portador(a) da RG. nº ".$rg."  SSP/BA, CPF ".$cpf." , nascido(a) em ".$diaNascimeto." de ".$mesNascimento." de ".$anoNascimento." , filho(a) de ".$mae." e  ".$pai.", concluiu o curso  de ".$curso.", no  ".$semestre." semestre de ".$anoConclusão.", tendo ".$cargaHoraria."  de carga horária, autorizado conforme Portaria Ministerial nº 0000.0000/00 de  ".$dataPortaria." publicada no D.O.U. em ".$dataPublicacao." reconhecido pela portaria Ministerial nº 0000.0000/00, publicada no D.O.U. em ".$dataPublicacaoMinisterio.".

		Informamos que a colação de grau ocorreu em   ".$dataColacaGrau." e seu diploma se encontra em andamento para registro no órgão competente. 
	
		 Por ser verdade, firmamos a presente



												 Salvador, ".$dataAtual.".




												 Assinatura do Responsável";

	    return $texto; 

	}
	
	
}

 ?>