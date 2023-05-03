<?php

require_once("ItemCardapio.php");

class Pedido
{
    protected int $idPedido = 0;
    protected float $precoTotal = 0;
    static int $contadorPedidos = 0;
    protected $itensNoPedido = array();

    const taxaDeEntrega = 50;

    public function __construct()
    {
        $this->idPedido++;
        self::$contadorPedidos++;
    }

    public function adicionarItem(ItemCardapio $itemCardapio)
    {
        array_push($this->itensNoPedido, $itemCardapio);
    }

    public function removerItem(ItemCardapio $itemCardapio)
    {
        $item = array_search($itemCardapio, $this->itensNoPedido);

        if ($item !== false)
            unset($this->itensNoPedido[$item]);

        $this->setPrecoTotal($this->getPrecoTotal() - $itemCardapio->getPrecoCalculado());
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "O item " . $itemCardapio->getDescricao() . " foi removido do pedido <br>";
    }

    public function calcularPrecoTotal(float $precoCalculadoDoItem)
    {
        $this->setPrecoTotal($this->precoTotal += $precoCalculadoDoItem);
        $this->setPrecoTotal($this->precoTotal += self::taxaDeEntrega);
    }

    public function getPrecoTotal(): float
    {
        return $this->precoTotal;
    }

    public function setPrecoTotal(float $precoTotal): self
    {
        $this->precoTotal = $precoTotal;
        return $this;
    }

    public function imprimePedidos()
    {
        echo "<br>";
        echo "<br>";
        echo "<b>Pedido Número: " . self::$contadorPedidos . "</b>";

        foreach ($this->getItensNoPedido() as $item) {
            echo "<br>";
            echo "<br>";
            echo "Incluído Pedido item ID: " . $item->getIdItem() . "<br>" .
                "Descrição do pedido: " . $item->getDescricao() . "<br>" .
                "Valor unitário do item: R$" . $item->getPreco() . " <br>" .
                "Quantidade: " . $item->getQuantidade() . "<br>" .
                "Valor final do item: R$" . $item->getPrecoCalculado() . "<br>";
            if (($item->getPreco() * $item->getQuantidade()) < $item->getPrecoCalculado())
                echo " Esse item teve acréscimo porque não inclui proteina <br>";
            else
                echo " Esse item teve desconto de R$" . ($item->getPreco() * $item->getQuantidade()) - $item->getPrecoCalculado() . ",00  devido ao tamanho do item<br>";
            if ($item instanceof Massa || $item instanceof Pizza) {
                echo "Ingredientes: " . $item->getIngredientes() . "<br>";
                echo "Tamanho: " . $item->getTamanho() . "<br>";
            } else {
                echo "Ingredientes Principais: " . $item->getIngredientesPrincipais() . "<br>";
                if ($item->getContemProteina()) {
                    echo "Essa salada inclui proteina. <br>";
                } else {
                    echo "Essa salada não inclui proteina. <br>";
                }
            }
            echo "---------------------//--------------//-------------------------------";
        }
        echo "<br>";
        echo "<br>";
        echo "<b>Valor total do pedido: R$" . $this->getPrecoTotal() . "</b>";

    }


    public function getIdPedido(): int
    {
        return $this->idPedido;
    }

    public function getItensNoPedido()
    {
        return $this->itensNoPedido;
    }
}
?>