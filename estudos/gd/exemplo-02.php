<?php 

require_once("DadosCurso.php"); 


$dadosCurso = new DadosCurso(); 

$title = "CERTIDAO DE CONCLUSAO DE CURSO";

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

		$texto = "Certiifcamos, a pedido do(a) interessado(a) ".$nome.", nacionalidade  brasileira, portador(a) da RG. nº ".$rg."  SSP/BA, CPF ".$cpf." , nascido(a) em ".$diaNascimeto." de ".$mesNascimento." de ".$anoNascimento." , filho(a) de ".$mae." e  ".$pai.", concluiu o curso  de ".$curso.", no  ".$semestre." semestre de ".$anoConclusão.", tendo ".$cargaHoraria."  de carga horária, autorizado conforme Portaria Ministerial nº 0000.0000/00 de  ".$dataPortaria." publicada no D.O.U. em ".$dataPublicacao." reconhecido pela portaria Ministerial nº 0000.0000/00, publicada no D.O.U. em ".$dataPublicacaoMinisterio.".

		Informamos que a colação de grau ocorreu em   ".$dataColacaGrau." e seu diploma se encontra em andamento para registro no órgão competente. 
	
		 Por ser verdade, firmamos a presente



												 Salvador, ".$dataAtual.".




												 Assinatura do Responsável";



#Criando uma imagem a partir de outra. 
$image = imagecreatefromjpeg("certificado.jpg"); 


#definindo a cor 
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100); 


#Escrevendo na imagem 
imagestring($image, 100, 380, 150, $title, $titleColor); 
imagestring($image, 5, 100, 220, $texto, $titleColor); 
#imagestring($image, 5, 130, 250, $texto2, $titleColor); 
#imagestring($image, 5, 440, 370, "Concluido em ".$dataAtual, $titleColor); 

#permite o carregamento da imagem
header("Content-Type: image/jpg"); 

#Carrega a imagem 
imagejpeg($image); 

#Destrói a variavel image
imagedestroy($image);  


 ?>