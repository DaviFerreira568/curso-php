
<div class="titulo">Herança</div>


<?php
    class Pessoa
    {
        public string $nome;
        public int $idade;
        function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
            echo "Pessoa criada <br>";
        }
        function __destruct(){
            echo"Destruido";
        }

        public function  apresentar():string{
            return "Olá $this->nome \n de $this->idade anos";
        }
    }

    $p1 = new Pessoa("augusto",21);
    echo $p1->apresentar();