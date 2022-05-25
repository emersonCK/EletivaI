<?php

    namespace Aluno\ProjetoPHP\Model\Entity;

    class Clientes
    {
        private $id;
        private $nome;
        private $idade;
        private $email;

        public function getId()
        {
            return $this->id;
        }

        public function setId($Id)
        {
            $this->id=$Id;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($Nome)
        {
            $this->nome=$Nome;
        }


        public function getIdade()
        {
           return $this->idade;
        }

        public function setIdade($Idade)
        {
            $this->idade=$Idade;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($Email)
        {
            $this->email=$Email;
        }
    }
?>

