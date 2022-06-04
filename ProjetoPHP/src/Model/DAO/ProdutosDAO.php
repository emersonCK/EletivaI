<?php

    namespace Aluno\ProjetoPHP\Model\DAO;

    use Aluno\ProjetoPHP\Model\Entity\Produtos;

    class ProdutosDAO
    {

        public function inserir(Produtos $p){
            try {
                $sql = "INSERT INTO `produto`(`nome`, `valor`, `descricao`) VALUES (:nome, :valor, :descricao)";
                $prepare = Conexao::conectar()->prepare($sql);
                $prepare->bindValue(":nome", $p->getNome());
                $prepare->bindValue(":valor", $p->getValor());
                $prepare->bindValue(":descricao", $p->getDescricao());
                return $prepare->execute();
            } catch (\Exception $e) {
                return false;
            }   
        }

        public function alterar(Produtos $p){
            try {
                $sql = "UPDATE `produto` SET `nome`=:nome,`valor`=:valor,`descricao`=:descricao WHERE `id`=:id";
                $prepare = Conexao::conectar()->prepare($sql);
                $prepare->bindValue(":nome", $p->getNome());
                $prepare->bindValue(":valor", $p->getValor());
                $prepare->bindValue(":descricao", $p->getDescricao());
                $prepare->bindValue(":id", $p->getId());
                return $prepare->execute();
            } catch (\Exception $e) {
                return false;
            }
        }

        public function excluir($id){
            try {
                $sql = "DELETE FROM `produto` WHERE `id`=:id";
                $p = Conexao::conectar()->prepare($sql);
                $p->bindValue(":id", $id);
                return $p->execute();
            } catch (\Exception $e) {
                return false;
            }
        }

        public function consultar(){
            try {
                $sql = "SELECT * FROM `produto`";
                return Conexao::conectar()->query($sql);
            } catch (\Exception $e) {
                return false;
            }
        }

        public function consultarPorId($id){
            try {
                $sql = "SELECT * FROM `produto` WHERE `id`:id";
                $p = Conexao::conectar()->query($sql);
                $p->bindValue(":id", $id);
                return $p->execute();
            } catch (\Exception $e) {
                return false;
            }
        }
    }

?>