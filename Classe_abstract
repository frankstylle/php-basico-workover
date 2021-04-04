<?php

    abstract class CarroBase {

        public $potencia;
        public $velMax;
        public $portas;
        public $ligado=false;

        abstract function teste();


        function ligar(){
            $this->ligado=true;
        }

        function desligar() {
            $this->ligado=false;
        }

        function status(){
            echo "<hr/>";
            echo "Potência:" . $this->potencia;            
            echo "<br/>Velocidade Máxima: " . $this->velMax;            
            echo "<br/>Portas: " . $this->portas;            
            if($this->ligado){
                echo "<br/>O carro está Ligado";
            }else{
                echo "<br/>O carro está Desligado";
            }
            echo "<hr/>";
        }

    }

   class Carro extends CarroBase{
        function Carro($pt,$vm,$po){
            $this->potencia = $pt;
            $this->velMax = $vm;
            $this->portas = $po;
            $this->status();
        }
        function teste(){
                
        }
    }

    $carro1=new Carro(150,280,4);
    $carro1=new Carro(100,180,4);
    $carro1=new Carro(88,140,2);
    $carro1=new Carro(300,380,4);

?>
