<?php
    class Notebook{
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
        private $ram;
        private $clock;
        private $resolution;
        private $sistema;
        private $touch;

        public function __construct(){}

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getRAM(){
            return $this->ram;
        }

        public function setRAM($ram){
            $this->ram = $ram;
        }

        public function getSistema(){
            return $this->sistema;
        }

        public function setSistema($sistema){
            $this->sistema = $sistema;
        }

    }
?>