<?php


require 'vendor/autoload.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$cliente = new Client(['verify' => false, 'base_uri'=>'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($cliente, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso){
    echo $curso . PHP_EOL;
}
$teste = 1;
echo $teste;

$teste2 = 3;
echo "Isso é uma alteração" . $teste2;