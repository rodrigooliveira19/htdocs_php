<?php 


require_once("config.php");

#session_unset($_SESSION['nome']); 

#Limpa a variavel e remove o usuário.
#session_destroy();  

# $_SESSION['nome'] foi definido no arquivo exemplo-01.php
echo $_SESSION['nome'];
echo $_SESSION['senha'];
 ?>