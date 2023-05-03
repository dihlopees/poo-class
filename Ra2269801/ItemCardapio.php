<?php

require_once("Pedido.php");

class ItemCardapio extends Pedido
{
    private int $idItem = 0;
    private string $descricao;
    private float $preco = 0;
    private int $quantidade;
    private float $precoCalculado = 0;
    public Pedido $pedido;

    public function __construct(int $idItem, string $descricao, float $preco, int $quantidade, Pedido $pedido)
    {
        $this->setIdItem($idItem);
        $this->setDescricao($descricao);
        $this->setPreco($preco);
        $this->setQuantidade($quantidade);
        $this->pedido = $pedido;
    }


    public function getIdItem(): int
    {
        return $this->idItem;
    }


    public function getDescricao(): string
    {
        return $this->descricao;
    }


    public function setDescricao(string $descricao): self
    {
        if ($descricao == '')
            echo "Descrição nao pode ser vazio";
        else
            $this->descricao = $descricao;
        return $this;
    }


    public function getPreco(): float
    {
        return $this->preco;
    }


    public function setPreco(float $preco): self
    {
        if ($preco <= 0)
            echo "Preço nao pode ser negativo ou igual a 0";
        else
            $this->preco = $preco;
        return $this;
    }


    public function getQuantidade(): int
    {
        return $this->quantidade;
    }


    public function setQuantidade(int $quantidade): self
    {
        if ($quantidade < 0)
            echo "Quantidade nao pode ser negativa";
        else
            $this->quantidade = $quantidade;
        return $this;
    }

    public function getPrecoCalculado(): float
    {
        return $this->precoCalculado;
    }

    public function setPrecoCalculado(float $precoCalculado): self
    {
        $this->precoCalculado = $precoCalculado;
        return $this;
    }

    public function calcularPrecoFinal(ItemCardapio $item)
    {
        $item->pedido->calcularPrecoTotal($item->getPrecoCalculado());
    }

    public function setIdItem(int $idItem): self
    {
        $this->idItem = $idItem;
        return $this;
    }
}
?>