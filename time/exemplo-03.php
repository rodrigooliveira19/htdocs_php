<?php 


#define o padra de linguagem a se usar.Definiu três padrões. 
#portuguese é do windows. 
#LC_ALL muda toda a configuração para o indicado. 

setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese"); 


#strftime é semelhante a date.Consegue pegar a data no padrão de linguagem definido. Ver documentação. 
#ucwords converte a primeira letra de cada string para maiuscula. 
echo ucwords(strftime("%A , %d de  %B de %G"));

echo "<br/>"; 

#date não converte para o padrão informado. 
echo date("l d/m/y");

 ?>