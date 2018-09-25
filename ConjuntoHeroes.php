<?php
    class ConjuntoHeroes{
        private $nombreHeroe;
        private $poderHeroe;
        private $detallesHeroe;
        private $universoHeroe;
        public function __construct($nombreHeroe, $poderHeroe, $descripcionHeroe, $universoHeroe){
            $this->nombreHeroe=$nombreHeroe;
            $this->poderHeroe=$poderHeroe;
            $this->descripcionHeroe=$descripcionHeroe;
            $this->universoHeroe=$universoHeroe;
        }

    }



?>