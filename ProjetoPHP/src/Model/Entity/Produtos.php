<?php

    namespace Aluno\ProjetoPHP\Model\Entity;
    class Produtos{
        private $id;
        private $nome;
        private $descricao;
        private $valor;

        public function getId()
        {
            $this->id;
        }

        public function setId($Id)
        {
            $this->id=$Id;
        }

        public function getNome()
        {
            $this->nome;
        }

        public function setNome($Nome)
        {
            $this->nome=$Nome;
        }

        public function getDescricao()
        {
            $this->descricao;
        }

        public function setDescricao($Descricao)
        {
            $this->descricao=$Descricao;
        }

        public function getValor()
        {
            $this->valor;
        }

        public function setValor($Valor)
        {
            $this->valor=$Valor;
        }
    }
?>