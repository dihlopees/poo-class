<?php

require_once("ItemCardapio.php");

class Massa extends ItemCardapio
{
    private string $tamanho;
    private string $ingredientes;

    const descontoMassaPequena = 2;
    const descontoMassaMedia = 5;
    const descontoMassaGrande = 15;

    public function __construct(int $idItem, string $descricao, float $preco, int $quantidade, Pedido $pedido, string $tamanho, string $ingredientes)
    {
        parent::__construct($idItem, $descricao, $preco, $quantidade, $pedido);
        $this->setTamanho($tamanho);
        $this->setIngredientes($ingredientes);
    }

    public function getTamanho(): string
    {
        return $this->tamanho;
    }

    public function setTamanho(string $tamanho)
    {
        if ($tamanho == 'pequena' || $tamanho == 'media' || $tamanho == 'grande')
            $this->tamanho = $tamanho;
        else
            echo "Você informou um tamanho invalido, informe = pequena | media | grande";
    }
    public function getIngredientes(): string
    {
        return $this->ingredientes;
    }

    public function setIngredientes(string $ingredientes): self
    {
        if ($ingredientes == '')
            echo "Ingredientes nao pode ser vazio";
        else
            $this->ingredientes = $ingredientes;
        return $this;
    }

    public function calcularPrecoFinal(ItemCardapio $item)
    {
        $precoBase = $item->getQuantidade() * $item->getPreco();

        if ($item->getTamanho() == 'pequena') {
            $precoFinal = $precoBase - self::descontoMassaPequena;
            $item->setPrecoCalculado($precoFinal);
        } else if ($item->getTamanho() == 'media') {
            $precoFinal = $precoBase - self::descontoMassaMedia;
            $item->setPrecoCalculado($precoFinal);
        } else {
            $precoFinal = $precoBase - self::descontoMassaGrande;
            $item->setPrecoCalculado($precoFinal);
        }

        parent::calcularPrecoFinal($item);
    }
}
?>