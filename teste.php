<?php

require 'src/Pessoa.php';
require 'src/Titular.php';

use Alura\BuscadorDeCursos\{Pessoa, Titular};
$umTitular = new Titular(new Pessoa('21', 'Adrian'), 'Dev');

echo "O titular " . $umTitular->getNome() . " De idade " . $umTitular->getIdade() . " Tem o cargo: " . $umTitular->getCargo() . "\n";