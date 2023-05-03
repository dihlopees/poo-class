<?php
require_once("Estoque.php");

class Maquiagens extends Estoque
{

    public function __construct($quantidadeDisponivel, $quantidadeTotalCadastrada, $nomeProduto, $preco, $marca)
    {
        parent::__construct($quantidadeDisponivel, $quantidadeTotalCadastrada, $nomeProduto, $preco, $marca);
    }
}
?>