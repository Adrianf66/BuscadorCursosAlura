<?php

namespace Alura\BuscadorDeCursos;

class Pessoa
{
    protected string $nome;
    protected int $idade;


    public function __construct(int $idade, string $nome)
    {
        $this->idade = $idade;
        $this->nome = $nome;
    }

    public function informaNome(): string
    {
        return $this->nome;
    }

    public function informaIdade(): int
    {
        return $this->idade;
    }


}