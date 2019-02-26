<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if(($usuario != "") && ($senha != "")) {
if(file_exists("bd/" . $usuario . "_" . $senha . ".txt")) {
$fp = fopen("bd/" . $usuario . "_" . $senha . ".txt", "r");
$nome = fgets($fp);
setCookie("senha", $senha);
setCookie("usuario", $usuario);
setCookie("nome", $nome);
echo "Login efetuado com sucesso. <a href='index.php'>Voltar a pagina inicial</a>";
}
else {
echo "Erro, usuario ou senha incorretos.";
}
}
else {
echo "Erro, todos os campos devem ser digitados";
}
?>