<?php 

header("Content-Type: image/png"); 

#imagecreate(width, height)
$image = imagecreate(256, 256); 

#A primeira cor que se cria, vira cor de fundo. 
#Valor para cor varia de 0 - 255. 
#$aux = imagecolorallocate(image, red, green, blue); 
$black = imagecolorallocate($image, 0, 0, 0); 
$red = imagecolorallocate($image, 230, 0, 0); 


#Escrevendo na tela. 
imagestring($image, 5, 60, 120, "Curso de php7", $red); 

#Gerando a imagem no formato png. 
imagepng($image); 


#destruindo a variavel image. 
imagedestroy($image); 

 ?>