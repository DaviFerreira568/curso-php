<div class="titulo">Herança</div>

<?php

    class Pessoa{
        public string $nome;
        public int $idade;

        function __construct($nome, $idade){
            $this->nome = $nome;
            $this->idade = $idade;
            echo "Pessoa criada <br>";
        }

        function __destruct(){
            echo "Pessoa Destruida";
        }

        public function apresentar(): string {
            return "Olá $this->nome de $this->idade anos <br>";
        }
    }

    class Usuario extends Pessoa{
        public string $login;

        function __construct($login, $nome, $idade){
            parent::__construct($nome, $idade); // Chamada ao construtor da classe pai
            $this->login = $login;
            echo "Usuário Criado com Sucesso! <br>";
        }

        function __destruct(){
            parent::__destruct(); // Chamada ao destrutor da classe pai
            echo "Usuário Deletado com Sucesso";
        }

        public function apresentar(): string {
            return "$this->login: " . parent::apresentar();
        }
    }
    $p1 = new Pessoa("augusto", 21);
    echo $p1->apresentar();
    $u1 = new Usuario("123@gmail.com", "joão", 12);
    echo $u1->apresentar();
    unset($u1);