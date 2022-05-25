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
$router->get('/clientes', 'Aluno\ProjetoPHP\Controller\ClientesController::abrirListaClientes');
$router->post('/cliente/inserir', 'Aluno\ProjetoPHP\Controller\ClientesController::inserirCliente');

//ADICIONAR AS ROTAS VÁLIDAS ACIMA
$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());