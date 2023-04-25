<?php
    class notebook{
        private $id;
        private $ddr;
        private $foto;
        private $hd;
        private $ssd;
        private $marca;
        private $modelo;
        private $description;
        private $placa;
        private $polegadas;

        private $clock;
        private $resolution;
        private $sistema;
        private $touch;

        public function getModelo(){
            return $this->modelo;
        }
    }
?>