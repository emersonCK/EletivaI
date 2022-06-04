<?php
    namespace Aluno\ProjetoPHP\Controller;

use Aluno\ProjetoPHP\Model\DAO\ClientesDAO;
use Aluno\ProjetoPHP\Model\Entity\Clientes;

class ClientesController{

        public static function abrirFormularioInserir(){
            require_once "../src/View/inserir_cliente.php";
        }

        public static function abrirFormularioAlterar($params)
        {
            $dao = new ClientesDAO();
            $resposta = $dao->consultarPorID($params[1]);
            require_once "../src/View/alterar_cliente.php";
        }
    
        public static function abrirListarClientes()
        {
            $dao = new ClientesDAO();
            $resposta = $dao->consultar();
            require_once "../src/View/listar_clientes.php";
        }
    
        public static function inserirCliente()
        {
            $cliente = new Clientes();
            $cliente->setEmail($_POST['email']);
            $cliente->setIdade($_POST['idade']);
            $cliente->setNome($_POST['nome']);
            $dao = new ClientesDAO();
            $resposta = $dao->inserir($cliente);
            ClientesController::abrirListarClientes();
        }
    
        public static function editarCliente($params){
            $cliente = new Clientes();
            $cliente->setEmail($_POST['email']);
            $cliente->setIdade($_POST['idade']);
            $cliente->setNome($_POST['nome']);
            $cliente->setId($params[1]);
            $dao = new ClientesDAO();
            $resposta = $dao->alterar($cliente);
            ClientesController::abrirListarClientes();
        }
    
        public static function excluirCliente($params){
            $dao = new ClientesDAO();
            $resposta = $dao->excluir($params[1]);
            ClientesController::abrirListarClientes();
        }
    }
