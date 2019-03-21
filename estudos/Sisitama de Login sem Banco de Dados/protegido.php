<?php
if(file_exists("bd/" . $_COOKIE['usuario'] . "_" . $_COOKIE['senha'] . ".txt")) {
$nome = $_COOKIE['nome'];
}
else {
header('Location: login.html');
}
?>