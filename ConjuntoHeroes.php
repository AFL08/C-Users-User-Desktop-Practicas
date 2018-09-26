<?php
    class ConjuntoHeroes{
        private $nombreHeroe;
        private $poderHeroe;
        private $detallesHeroe;
        private $universoHeroe;
        private function __construct($nombreHeroe, $poderHeroe, $descripcionHeroe, $universoHeroe){
            $this->nombreHeroe=$nombreHeroe;
            $this->poderHeroe=$poderHeroe;
            $this->descripcionHeroe=$descripcionHeroe;
            $this->universoHeroe=$universoHeroe;
        }

        public function setNombreHeroe($nombreHeroe){}

        public function getNombreHeroe(){}

        public function setPoderHeroe($poderHeroe){}

        public function getPoderHeroe(){}

        public function setDescripcionHeroe($descripcionHeroe){}

        public function getDescripcionHeroe(){}

        public function setUniversoHeroe($universoHeroe){}

        public function getUniversoHeroe(){}
        
        private function ComprobacionUniversoPerteneciente($universoHeroe){}


    }



?>