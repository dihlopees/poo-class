<?php

require_once("Maquiagens.php");
require_once("Perfumes.php");
require_once("Estoque.php");


$maquiagem1 = new Maquiagens(10, 10, "maquiagem", 50, "avon");
$perfume1 = new Perfumes(5, 5, "perfume", 20, "boticario");

echo "Trabalho POO - Ingrid Lopes RA: 22.6980-1";
echo "<br>";
echo "Quantidade de Produtos da sua Loja Hoje: " . Estoque::getTotalDeProdutosCadastrados();

Estoque::printarProdutos($maquiagem1, " cadastrado:");
Estoque::printarProdutos($perfume1, " cadastrado:");


Estoque::compararPrecos($maquiagem1, $perfume1);

Estoque::darEntradaDeEstoque($maquiagem1, 20);
Estoque::darSaidaDeEstoque($perfume1, 3);

echo "<br>";
echo "<br>";
echo "---------------------------------------------------------------------------------------------";
Estoque::printarProdutos($maquiagem1, " atualizado:");
Estoque::printarProdutos($perfume1,  " atualizado:");

$maquiagem2 = new Maquiagens(3, 3, "maquiagem", 10, "vult");
$perfume2 = new Perfumes(2, 2, "perfume", 100, "natura");

echo "<br>";
echo "<br>";
echo "Quantidade de Produtos da sua Loja Atualizado: " . Estoque::getTotalDeProdutosCadastrados();

Estoque::zerarEstoqueDoProduto($maquiagem1);
Estoque::printarProdutos($maquiagem1, " com estoque zerado:");

echo "<br>";
echo "<br>";
echo "Quantidade de Produtos da sua Loja Atualizado: " . Estoque::getTotalDeProdutosCadastrados();

?>