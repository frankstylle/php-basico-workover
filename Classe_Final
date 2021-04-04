<?php
// Só Pode APlicar * final * para métodos apenas métodos,  *Propriedades NÂO*
//Final, a palavra reservada final, diz que o método não pode ser sobrescrito
abstract class CarroBase
{
    public $cor;
    public $vel = 0;

    function CarroBase($cr)
    {
        $this->cor = $cr;
    }

    function status()
    {
        echo "<hr/>";
        echo "<br/>Carro: " . $this->cor;
        echo "<br/>Velocidade: " . $this->vel;
        echo "<hr/>";
    }

    final function Cor()
    {
        echo '<hr/>';
        echo "<br/>Minha cor: " . $this->cor;
        echo "<br/>Método Original<hr/>";
    }
}

class Carro extends CarroBase
{
    /*
    function Cor()
    {
        echo "<hr>";
        echo "<br/>Cor: " . $this->cor;
        echo "<hr>";
    }
    */
}

class Transp extends CarroBase
{
}

$car = new Carro("Vermelho");
$tra = new Transp("Azul");

$car->Cor();
$tra->Cor();


?>
