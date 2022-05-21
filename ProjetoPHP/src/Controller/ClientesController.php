<?php
    namespace Aluno\ProjetoPHP\Controller;

use Aluno\ProjetoPHP\Model\DAO\ClientesDAO;
use Aluno\ProjetoPHP\Model\Entity\Clientes;

class ClientesController{

        public static function abrirFormularioInserir(){
            require_once "../src/View/inserir_cliente.php";
        }

        public static function inserirCliente()
        {
            $cliente = new Clientes();
            $cliente->setNome($_POST['nome']);
            $cliente->setEmail($_POST['email']);
            $cliente->setIdade($_POST['idade']);

            $dao = new ClientesDAO();
            if ($dao->inserir($cliente))
                return "Inserido com sucesso!";
            
            return "Erro ao inserir!";
        }
    }
?>