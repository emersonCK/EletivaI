<?php

    namespace Aluno\ProjetoPHP\Model\DAO;

    use Aluno\ProjetoPHP\Model\Entity\Produtos;

    class ProdutosDAO
    {

        public function inserir(Produtos $p){
            try {
                $sql = "INSERT INTO `produto`(`nome`, `valor`, `descricao`) VALUES (:nome, :valor, :descricao)";
            } catch (\Exception $e) {
                return false;
            }   
        }

        public function alterar(Produtos $p){
            try {
                $sql = "UPDATE `produto` SET `nome`=:nome,`valor`=:valor,`descricao`=:descricao WHERE `id`=:id";
            } catch (\Exception $e) {
                return false;
            }
        }

        public function excluir($id){
            try {
                $sql = "DELETE FROM `produto` WHERE `id`=:id";
            } catch (\Exception $e) {
                return false;
            }
        }

        public function consultar(){
            try {
                $sql = "SELECT * FROM `produto`";
            } catch (\Exception $e) {
                return false;
            }
        }

        public function consultarPorId($id){
            try {
                $sql = "SELECT * FROM `produto` WHERE `id`:id";
            } catch (\Exception $e) {
                return false;
            }
        }
    }

?>