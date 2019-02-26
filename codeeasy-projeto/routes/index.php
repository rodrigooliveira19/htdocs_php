<?php 

#Da acesso a função do arquivo slimConfiguration no namespace src. 
use function src\slimConfiguration; 
use App\Controllers\ProdutosController; 
use App\Controllers\LojasController; 


$app = new \Slim\App(slimConfiguration()); 
// =======================================
#$app->get('/produtos', ProdutosController::class.':getProdutos'); 
#$app->get('/','\App\Controllers\ProductController:getProducts'); 


$app->get('/lojas', LojasController::class.':getLojas');  
$app->post('/loja',LojasController::class.':insertLoja'); 
#Rota para listar uma loja e todos os seus produtos. 
$app->get('/loja_id_produtos',LojasController::class.':getLojaIdProdutos'); 

$app->get('/produtos', ProdutosController::class.':getProdutos'); 
$app->post('/produto', ProdutosController::class.':insertProduto');
$app->put('/produto', ProdutosController::class.':updateProduto');
$app->delete('/produto', ProdutosController::class.':deleteProduto');

// =======================================
 

$app->run(); 


?>