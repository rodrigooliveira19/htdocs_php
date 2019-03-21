<!DOCTYPE html>
<!Create by: SatellaSoft. www.satellasoft.net>

<html>
	<head>
		<title>°°Power Contact°°</title>
		<link rel="stylesheet" href="css.css" media="all"/>
	</head>
	
	<body>
		<div id="central">
			<form action="" method="post" name="power" id="power">
			  <table width="500" border="0" align="center">
				<tr>
				  <td class="name">Nome:</td>
				  <td><label>
					<input  class="campo" name="nome" type="text" id="nome" placeholder="Your Name">
				  </label></td>
				</tr>
				<tr>
				  <td class="name">E-mail:</td>
				  <td><label>
					<input class="campo" name="email" type="text" id="email" placeholder="Your E-mail">
				  </label></td>
				</tr>
				<tr>
				  <td class="name">Recado:</td>
				  <td><label>
					<textarea class="campus" name="recado" id="recado" placeholder="Your Coment"></textarea>
				  </label></td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td><label>
					<input name="Send" class="buttom" type="submit" id="Send" value="Enviar">
				  </label>
					<label>
					<input name="Clear" class="buttom" type="reset" id="Clear" value="Limpar">
				  </label></td>
				</tr>
			  </table>
			  <?php
				if (isset($_POST[nome])){
				$nome =   $_POST[nome];
				$email =  $_POST[email];
				$recado = $_POST[recado];
				$assunto = "Contato";
				
					$send = ("exemple@satellasoft.net"); //Coloque seu E-mail aqui.
					
					$data = date("d/m/y");	   
					$hora = date("H:i:s");
					$ip = $_SERVER[REMOTE_ADDR];
					
					$headers .= "From: $send\r\n"; 
											//para o envio em formato HTML
											$headers = "MIME-Version: 1.0\r\n";
											$headers .= "Content-type: text/html;
											charset=iso-8859-1\r\n";
											
											$corpo =("
														 
														<b>De:</b> $_POST[nome]; <br/>
														<b>E-mail:</b> $email<br/>
														<b>Assunto:</b> $assunto<br/>
														<b>Para:</b> $send<br/>
															<hr/><br/>
														<b>Recado:</b> <br/> 
														$recado
														<br/>
															<hr/>
														<br/>
														
														<b>Data:</b> $data <br/>
														<b>Hora:</b> $hora	<br/>
														<b>IP:</b>	$ip			<br/>
														
														");
																		
												mail($send, $assunto, $corpo, $headers); 
										
											echo "<script type=\"text/javascript\"> alert('Obrigado $nome, Seu Recado Foi Enviado Com sucesso!!!') </script>";

					
				} else{
				
				
				}
			  
			  ?>
			</form>
				<br/>
				
				<p>&nbsp;Desenvolvido por: <a href="http://www.satellasoft.net">SatellaSoft</a>.</p>
		</div>
	</body>
	

</html>