<?php

namespace Alura\BuscadorDeCursos;

class Pessoa
{
    public $nome;
    public $idade;


    public function __construct(int $idade, string $nome)
    {
        $this->idade = $idade;
        $this->nome = $nome;
    }
}