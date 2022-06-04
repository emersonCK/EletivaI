<?php

namespace Aluno\ProjetoPHP\Controller;

use Aluno\ProjetoPHP\Model\DAO\ProdutosDAO;
use Aluno\ProjetoPHP\Model\Entity\Produtos;

class ProdutosController{

    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function abrirFormularioAlterar($params)
    {
        $dao = new ProdutosDAO();
        $resposta = $dao->consultarPorID($params[1]);
        require_once "../src/View/alterar_produto.php";
    }

    public static function abrirListarProdutos()
    {
        $dao = new ProdutosDAO();
        $resposta = $dao->consultar();
        require_once "../src/View/listar_produtos.php";
    }

    public static function inserirProduto(){
        $produto = new Produtos();
        $produto->setDescricao($_POST['descricao']);
        $produto->setValor($_POST['valor']);
        $produto->setNome($_POST['nome']);
        $dao = new ProdutosDAO();
        $resultado = $dao->inserir($produto);
        ProdutosController::abrirListarProdutos();
    }

    public static function editarProduto($params){
        $produto = new Produtos();
        $produto->setNome($_POST['nome']);
        $produto->setDescricao($_POST['descricao']);
        $produto->setValor($_POST['valor']);
        $produto->setId($params[1]);
        $dao = new ProdutosDAO();
        $resultado = $dao->alterar($produto);
        ProdutosController::abrirListarProdutos();
    }

    public static function excluirProduto($params){
        $dao = new ProdutosDAO();
        $resultado =$dao->excluir($params[1]);
        ProdutosController::abrirListarProdutos();
    }

}