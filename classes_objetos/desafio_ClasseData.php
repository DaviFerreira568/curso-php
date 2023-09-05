<?php

class Data
{
    public int $dia;
    public string $mes;
    public int $ano;

    public function __construct($dia = 1, $mes = "Janeiro", $ano = 1970)
    {
        $this->dia = (int)$dia; // Converte $dia para inteiro
        $this->mes = "$mes";    // Usa aspas duplas para envolver $mes
        $this->ano = $ano;
    }

    public function apresentar(): string
    {
        return "$this->dia/$this->mes/$this->ano \n";
    }
}

$data1 = new Data();
echo $data1->apresentar();

$data2 = new Data(29,"agosto", 1202);
echo $data2->apresentar();

