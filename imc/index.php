<?php
############################################################################################
#####################################| CRÉDITOS |###########################################
##########| POR UMA QUESTÃO DE DIREITOS,QUANDO ALTERAR O CÓDIGO FAOR MANTER OS CRÉDITOS |###
##########| DESENVOLCIDO POR DOUGLAS TOMACHEVSKI |##########################################
##########| CONTATO douglastomas@ig.com.br |################################################
############################################################################################

	require_once("vendor/autoload.php"); 

	$app = new \Slim\Slim();
	

	$app->get('/',function(){

		echo  json_encode(array(
			'date'=>date("Y-m-d H:i:s")
		));

		#echo "<br/>";

	});

	$app->get('/hello/:name', function ($name) {
	    echo "Hello, " . $name;
	});
	$app->run();
?>

<html>
<form name="form1" id="form1" method="POST" action="index.php">
Altura: <input name="altura" type="text" id="altura" size="10" maxlength="10"> 
<br>
Peso: <input name="peso" type="text" id="peso" size="12" maxlength="152"> 
<br>
<input name="Submit" type="submit" id="calcular" value="Calcular">
<br>
<br>
usar somente ponto
</form>
<br>
<br>
<br>

<?php
$altura = $_POST["altura"];
$peso = $_POST["peso"];

$imc = $peso / ($altura * $altura);
?>
<br>
<? 
if ($imc < 17){
$msg = "Muito abaixo do peso!";


}elseif (($imc >= 17)  &&($imc <= 18.49)){
$msg = "Abaixo do peso";


}elseif (($imc >= 18.5)&&($imc <= 24.99)){
$msg = "Peso normal";


}elseif (($imc >= 25)  &&($imc <= 29.99)){
$msg = "Acima do peso";


}elseif (($imc >= 30)  &&($imc <= 34.99)){
$msg = "Obesidade I";


}elseif (($imc >= 35)  &&($imc <= 39.99)){
$msg = "Obesidade II (severa)";


}elseif ($imc > 40){
$msg = "Obesidade III (mórbida)";

}

 echo "<b>IMC : $imc<b/>"; 

?>

<b>IMC: </b><?php echo $imc; ?>
<br>
<b>Mensagem: </b><?php echo $msg; ?>
<br>
<?php echo $imc; ?>
 
</html>

