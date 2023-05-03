<?php

require_once("Pedido.php");
require_once("ItemCardapio.php");
require_once("Pizza.php");
require_once("Massa.php");
require_once("Salada.php");

echo 'Trabalho de POO - Ingrid Lopes RA: 22.6980-1 ';

$pedido = new Pedido();

$pizza = new Pizza(1, 'pizza', 50, 1, $pedido, 'pequena', 'calabresa e bacon');
$pizza->calcularPrecoFinal($pizza);

$massa = new Massa(2, 'massa', 60.3, 2, $pedido, 'grande', 'alho e oleo');
$massa->calcularPrecoFinal($massa);

$salada = new Salada(3, 'salada', 20, 1, $pedido, 'alface e cebola', false);
$salada->calcularPrecoFinal($salada);


$pedido->adicionarItem($pizza);
$pedido->adicionarItem($massa);
$pedido->adicionarItem($salada);

$pedido->imprimePedidos();

$pedido->removerItem($pizza);
$pedido->imprimePedidos();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "************************************************************** <br>";

$pedido2 = new Pedido();
$pizza2 = new Pizza(1, 'pizza', 20, 1, $pedido2, 'pequena', 'portuguesa');
$pizza2->calcularPrecoFinal($pizza2);

$pizza3 = new Pizza(2, 'pizza', 50, 1, $pedido2, 'grande', 'confeti');
$pizza3->calcularPrecoFinal($pizza3);

$pedido2->adicionarItem($pizza2);
$pedido2->adicionarItem($pizza3);

$pedido2->imprimePedidos();
?>