<?php 

require_once("config.php"); 

#session_id('qd088s5jcu3cr8lpbej3nq5qdb'); 

#cria um novo id de sessão.Utilizado sempre quando um usuário faz um novo login. 
session_regenerate_id(); 

echo session_id();

echo "<br/>";

var_dump($_SESSION); 

echo "<br/>";

#Imprime o caminho onde estão sendo guardados os ids de sessão. 
echo session_save_path();
echo "<br/>";
echo session_status();


 ?>