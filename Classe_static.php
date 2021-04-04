<?php

    class Carro{
        public $cor;                //Propriedade padrao pertence ao objeto que foi criado
        public static $vel;       //padrao para static as propriedades pertence da classe ao inves do proprio objeto

        function Carro($cr){
            $this->cor=$cr;
            self::$vel=0;
        }

        function mudaVel($vl){
            self::$vel=$vl;
        }
        function status(){
            echo "<hr/>";
            echo "Cor: " . $this->cor;    
            echo "<br/>Velocidade: " . self::$vel;    
            echo "<hr/>";
        }


    }

    $car1=new Carro("Vermelho");
    $car2=new Carro("Verde");
    $car3=new Carro("Azul");
    $car1->status();
    $car2->status();
    $car3->status();

    echo "Velocidade Alterada<br>";
    $car1->mudaVel(100);

    $car1->status();
    $car2->status();
    $car3->status();
    
    echo "Velocidade Alterada<br>";
    $car2->mudaVel(230);

    $car1->status();
    $car2->status();
    $car3->status();

?>
