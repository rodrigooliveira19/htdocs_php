<?php 

namespace src; 

#getenv(var) retorna o conteudo que está na variavel informada. 
function slimConfiguration(): \Slim\Container
{ 
	$configuration = [
    'settings' => [
        'displayErrorDetails'=>getenv('DISPLAY_ERRORS_DETAILS'),
        'determineRouteBeforeAppMiddleware' => true,
  		'addContentLengthHeader' => false,
    ],
];


 $configuration = new \Slim\Container($configuration); 
 return $configuration; 

} 



?>