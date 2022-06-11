<?php
    namespace Aluno\ProjetoPHP\Controller;

    class ExercicioController
    {
        public static function exibir(){
            require_once("../src/View/exibir_resposta.php");
        }

        public static function calcularMedia(){
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $valor3 = $_POST['valor3'];
            $valor4 = $_POST['valor4'];
            $resposta = ($valor1 + $valor2 + $valor3 + $valor4) / 4;
            require_once("../src/View/exibir_resposta.php");
        }

        public static function calcularTroco(){
            $valor1 = $_POST['valor'];
            $valor2 = $_POST['quantidade'];
            $resposta = $valor1 + $valor2;
            require_once("../src/View/exibir_resposta.php");
        }

        public static function valorQuilo(){
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $resposta = $valor1 + $valor2;
            require_once("../src/View/exibir_resposta.php");
        }

        public static function imprimirValor(){
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $resposta = $valor1 + $valor2;
            require_once("../src/View/exibir_resposta.php");
        }

        public static function PositivoNegativo(){
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $resposta = $valor1 + $valor2;
            require_once("../src/View/exibir_resposta.php");
        }
    }
?>