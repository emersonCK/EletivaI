<?php

    namespace Aluno\ProjetoPHP\Model\DAO;

    use Aluno\ProjetoPHP\Model\Entity\Clientes;

    class ClientesDAO
    {

        public function inserir(Clientes $c){
            try {
                $sql = "INSERT INTO `cliente`(`nome`, `idade`, `email`) VALUES (:nome, :idade, :email)";
                $p = Conexao::conectar()->prepare($sql);
                $p->bindValue(":nome", $c->getNome());
                $p->bindValue(":idade", $c->getIdade());
                $p->bindValue(":email", $c->getEmail());
                return $p->execute();
            } catch (\Exception $e) {
                return false;
            }   
        }

        public function alterar(Clientes $c){
            try {
                $sql = "UPDATE `cliente` SET `nome`=:nome,`idade`=:idade,`email`=:email WHERE `id`=:id";
                $p = Conexao::conectar()->prepare($sql);
                $p->bindValue(":nome", $c->getNome());
                $p->bindValue(":idade", $c->getIdade());
                $p->bindValue(":email", $c->getEmail());
                $p->bindValue(":id", $c->getId());
                return $p->execute();
            } catch (\Exception $e) {
                return false;
            }
        }

        public function excluir($id){
            try {
                $sql = "DELETE FROM `cliente` WHERE `id`=:id";
                $p = Conexao::conectar()->prepare($sql);
                $p->bindValue(":id", $id);
                return $p->execute();
            } catch (\Exception $e) {
                return false;
            }
        }

        public function consultar(){
            try {
                $sql = "SELECT * FROM `cliente`";
                return Conexao::conectar()->query($sql);
            } catch (\Exception $e) {
                return false;
            }
        }

        public function consultarPorId($id){
            try {
                $sql = "SELECT * FROM `cliente` WHERE `id`:id";
                $p = Conexao::conectar()->query($sql);
                $p->bindValue(":id", $id);
                return $p->execute();
            } catch (\Exception $e) {
                return false;
            }
        }
    }

?>