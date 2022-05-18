<?php

    namespace Aluno\ProjetoPHP\Model\DAO;

    use Aluno\ProjetoPHP\Model\Entity\Clientes;

    class ClientesDAO
    {

        public function inserir(Clientes $c){
            try {
                $sql = "INSERT INTO `cliente`(`nome`, `idade`, `email`) VALUES (:nome, :idade, :email)";
            } catch (\Exception $e) {
                return false;
            }   
        }

        public function alterar(Clientes $c){
            try {
                $sql = "UPDATE `cliente` SET `nome`=:nome,`idade`=:idade,`email`=:email WHERE `id`=:id";
            } catch (\Exception $e) {
                return false;
            }
        }

        public function excluir($id){
            try {
                $sql = "DELETE FROM `cliente` WHERE `id`=:id";
            } catch (\Exception $e) {
                return false;
            }
        }

        public function consultar(){
            try {
                $sql = "SELECT * FROM `cliente`";
            } catch (\Exception $e) {
                return false;
            }
        }

        public function consultarPorId($id){
            try {
                $sql = "SELECT * FROM `cliente` WHERE `id`:id";
            } catch (\Exception $e) {
                return false;
            }
        }
    }

?>