<?php
    class Ponto {
        
        private $x;
        private $y;
        private static $contador = 0;

        public function __construct($x, $y)
        {
            $this->setX($x);
            $this->setY($y);
            self::setContador();
        }

        public function calcularDistancia(Ponto $p)
        {
            return sqrt(pow(($p->getX() - $this->x), 2) +  pow(($p->getY() - $this->y), 2));
        }

        public function calcularDistanciaComValores($x, $y)
        {
            return sqrt(pow(($x - $this->x), 2) +  pow(($y - $this->y), 2));
        }

        public function calcularDistanciaComValores2($x, $y, $x2, $y2)
        {
            return sqrt(pow(($x - $x2), 2) +  pow(($y - $y2), 2));
        }

        private static function setContador()
        {
            self::$contador++;
        }

        public static function getContador()
        {
            return self::$contador;
        }

        public function setX($x)
        {
            $this->x=$x;
        }

        public function getX()
        {
            return $this->x;
        }

        public function getY()
        {
            return $this->y;
        }


        public function setY($y)
        {
            $this->y=$y;
        }


    }
