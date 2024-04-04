<?php

namespace Alura\BuscadorDeCursos;

class Titular extends Pessoa
{
    public string $cargo;
    public Pessoa $individuo;

   public function __construct(Pessoa $nome, string $cargo)
   {
       $this->cargo = $cargo;
       $this->individuo = $nome;
   }

    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function getNome(): string
    {
        return $this->individuo->informaNome();
    }
    public function getIdade(): int
    {
        return $this->individuo->informaIdade();
    }
}