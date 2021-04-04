<?php

    class Carro {
        var $tipo;  // 1=Passeio    // 2=Esporte    // 3=Utilitário
        var $velMax;
        var $nome;
        var $liga;
        var $vel;

                                            // CONSTRUTOR
        function Carro($tp,$no) {
            $this->tipo=$tp;
            $this->liga=false;
            $this->nome=$no;
            $this->vel=0;
            if($tp==1){
                $this->velMax=160;
            }else if($tp==2){
                $this->velMax=300;
            }else{
                $this->velMax=100;
            }
        }

        function Ligar(){
            $this->liga = true;
        }

        function Desligar(){
            $this->liga = false;
        }

        function Velocidade($vl) {
            if($vl > $this->velMax){
                $this->vel = $this->velMax;
            }else{
                $this->vel=$vl;
            }
        }
                                //  DETALHES
        function Id(){
            echo "<hr/>";
            echo "Nome do Carro: " . $this->nome;
            echo "<br/>Tipo do Carro: " . $this->tipo;
            echo "<br/>Velocidade Máxima: " . $this->velMax;
            echo "<br/>Velocidade Atual: " . $this->vel;
            
            if($this->liga){
                echo "<br/>Este Carro está LIGADO!";
            }else {
                echo "<br/>DESLIGADO!";
            }
        }
    }  
    
    $carro1=new Carro(2,"Rapid");
    $carro2=new Carro(3,"Carregador");
    $carro3=new Carro(1,"Basic");
    $carro4=new Carro(2,"Veloz");
    $carro5=new Carro(2,"Flexa");

    $carro1->Ligar();
    $carro3->Ligar();
    $carro5->Ligar();

    $carro5->Velocidade(200);

    $carro3->Desligar();


    $carro1->Id();
    $carro2->Id();
    $carro3->Id();
    $carro4->Id();
    $carro5->Id();



?>
