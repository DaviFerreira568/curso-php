
<div class="titulo">Static</div>


<?php
    class A {
        public string $naoStatic = "Variável de Instância";
        public static string  $static = "Variável de classe Estática";

        public function mostrarA():string{
            return "Não estático = $this->naoStatic <br>  Estático = ". self::$static."<br>";

        }
        public static function mostrarStatic() :string{
            return " Estatica = " . self::$static;
        }
    }

    $T1 = new A;
    echo $T1->mostrarA();

    $t2 = new A;
    echo $t2->mostrarStatic();
