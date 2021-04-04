<?php

class Aula
{
    protected $var1 = "Bom dia";
    protected $var2 = "canalfessorbruno@gmail.com";
    protected $var3 = "www.webveste.com.br";

    function escreve()
    {
        echo "<br/>Método da classe aula";
        echo "<br />" . $this->var1;
        echo "<br />" . $this->var2;
        echo "<br />" . $this->var3;
    }
}

class Canal extends Aula
{
    var $vc1 = "Curso de PHP";
    var $vc2 = "Bruno";

    function Escreve2()
    {
        echo "<br/>Método da classe canal";
        echo "<br/>" . $this->vc1;
        echo "<br/>" . $this->vc2;
        echo '<br/>' . $this->var1;
        echo '<br/>' . $this->var2;
        echo '<br/>' . $this->var3;
    }
}

$aulaOBJ = new aula();
$canalOBJ = new Canal();


echo "<hr/>";
//$canalOBJ->escreve();
$canalOBJ->Escreve2();

echo '<hr>';
//echo '<br/>' . $aulaOBJ->var1;
//echo '<br/>' . $aulaOBJ->var2;
//echo '<br/>' . $aulaOBJ->var3;
$canalOBJ->escreve();
?>
