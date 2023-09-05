<div class="titulo">Primeira Classe</div>

<?php

class Cliente
{
    public $nome = "Indefinido";
    public $idade = 18;
    public function apresentar()
    {
        return "Nome: $this->nome <br> Idade: $this->idade"; 
    }
}

$cliente1 = new Cliente();
echo $cliente1->apresentar();

?>
