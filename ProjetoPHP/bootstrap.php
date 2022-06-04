<?php

require_once __DIR__.'/vendor/autoload.php';

//Aqui a gente recupera o que o usuário digitou e qual método HTTP ele utilizou
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \Aluno\ProjetoPHP\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO
$router->get('/ola-mundo', function(){
    return "Ola mundo!";
});

$router->get('/exemplo', 'Aluno\ProjetoPHP\Controller\ExercicioController::exibir');
$router->post('/exemplo', 'Aluno\ProjetoPHP\Controller\ExercicioController::exibirResultado');

$router->get('/cliente/novo', 'Aluno\ProjetoPHP\Controller\ClientesController::abrirFormularioInserir');
$router->get('/clientes', 'Aluno\ProjetoPHP\Controller\ClientesController::abrirListarClientes');
$router->get('/cliente/alterar/{id}', 'Aluno\ProjetoPHP\Controller\ClientesController::abrirFormularioAlterar');
$router->get('/cliente/excluir/{id}', 'Aluno\ProjetoPHP\Controller\ClientesController::excluirCliente');
$router->post('/cliente/editar/{id}', 'Aluno\ProjetoPHP\Controller\ClientesController::editarCliente');
$router->post('/cliente/inserir', 'Aluno\ProjetoPHP\Controller\ClientesController::inserirCliente');


$router->get('/produtos', 'Aluno\ProjetoPHP\Controller\ProdutosController::abrirListarProdutos');
$router->get('/produto/novo', 'Aluno\ProjetoPHP\Controller\ProdutosController::abrirFormularioInserir');
$router->get('/produto/alterar/{id}', 'Aluno\ProjetoPHP\Controller\ProdutosController::abrirFormularioAlterar');
$router->get('/produto/excluir/{id}', 'Aluno\ProjetoPHP\Controller\ProdutosController::excluirProduto');
$router->post('/produto/editar/{id}', 'Aluno\ProjetoPHP\Controller\ProdutosController::editarProduto');
$router->post('/produto/inserir', 'Aluno\ProjetoPHP\Controller\ProdutosController::inserirProduto');

//ADICIONAR AS ROTAS VÁLIDAS ACIMA
$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());