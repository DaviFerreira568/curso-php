<div class="titulo">Construtor e Destrutor</div>
<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade, )
    {
        echo "Construtor Chamado! <br>";
        $this->nome = $novoNome;
        $this->idade = $idade;
    }
    function __destruct()
    {
        echo 'e morreu! <br>';
    }

    public function apresentar()
    {
        echo "$this->nome, $this->idade <br>";

    }
}

$pessoa = new Pessoa('Zé da Manga', 9999);
$pessoa -> apresentar();

unset($pessoa);
//$pessoa->apresentar(); não vai funcionar após o unset.
$pessoa2= new Pessoa('jubilei', 29);
$pessoa2 ->apresentar();



?>