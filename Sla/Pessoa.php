<?php

namespace Orientacao;

class Pessoa {
    private string $nome;

    private float $altura;

    private string $sobrenome;

    public function __constructor(string $nome, string $sobrenome, float $altura) {
        $this -> altura = $altura;
        $this -> nome = $nome;
        $this -> sobrenome = $sobrenome;
    }

    public function getAltura():float {
        return $this -> altura;
    }

    public function setAltura(float $altura):void{
        $this -> altura = $altura;
    }
}