<?php

class Estoque
{
    private $quantidadeDisponivel;
    private $preco;
    private $quantidadeTotalCadastrada;
    private $nomeProduto;
    private $marca;

    private static $totalDeProdutosCadastrados = 0;

    public function __construct($quantidadeDisponivel, $quantidadeTotalCadastrada, $nomeProduto, $preco, $marca)
    {
        $this->quantidadeDisponivel = $quantidadeDisponivel;
        $this->quantidadeTotalCadastrada = $quantidadeTotalCadastrada;
        $this->nomeProduto = $nomeProduto;
        $this->preco = $preco;
        $this->marca = $marca;
        self::$totalDeProdutosCadastrados++;
        echo "<br>";
        echo "Um novo produto foi cadastrado! <br>";
    }

    public function getQuantidadeDisponivel()
    {
        return $this->quantidadeDisponivel;
    }

    public function setQuantidadeDisponivel($quantidadeDisponivel): self
    {
        $this->quantidadeDisponivel = $quantidadeDisponivel;
        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco): self
    {
        $this->preco = $preco;
        return $this;
    }


    public function getQuantidadeTotalCadastrada()
    {
        return $this->quantidadeTotalCadastrada;
    }

    public function setQuantidadeTotalCadastrada($quantidadeTotalCadastrada): self
    {
        $this->quantidadeTotalCadastrada = $quantidadeTotalCadastrada;
        return $this;
    }

    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    public function setNomeProduto($nomeProduto): self
    {
        $this->nomeProduto = $nomeProduto;
        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;
        return $this;
    }

    public static function compararPrecos(Estoque $produto1, Estoque $produto2)
    {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "O preço do produto " . $produto1->getNomeProduto() . " da marca: " . $produto1->getMarca() . " custa: R$ " . $produto1->getPreco();
        echo "<br>";
        echo "E o preço do produto " . $produto2->getNomeProduto() . " da marca: " . $produto2->getMarca() . " custa: R$ " . $produto2->getPreco();
        echo "<br>";
        echo "A diferença de preço entre eles é de: R$" . $produto1->getPreco() - $produto2->getPreco();
    }

    public static function getTotalDeProdutosCadastrados()
    {
        return self::$totalDeProdutosCadastrados;
    }

    public static function darSaidaDeEstoque(Estoque $produto, int $quantidade)
    {
        if ($produto->getQuantidadeDisponivel() >= $quantidade) {

            $produto->setQuantidadeDisponivel($produto->getQuantidadeDisponivel() - $quantidade);
        } else {
            echo 'Quantidade solicitada não disponivel';
        }
    }

    public static function darEntradaDeEstoque(Estoque $produto, int $quantidade)
    {
        if ($quantidade > 0) {
            $novaQuantidade = $produto->getQuantidadeDisponivel() + $quantidade;
            $produto->setQuantidadeDisponivel($novaQuantidade);
            $produto->setQuantidadeTotalCadastrada($produto->getQuantidadeTotalCadastrada() + $quantidade);
        } else {
            echo "Quantidade informada invalida";
        }
    }

    public static function zerarEstoqueDoProduto(Estoque $produto)
    {
        $produto->setQuantidadeDisponivel(0);
    }

    public static function printarProdutos(Estoque $produto, String $mensagem)
    {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Produto " . $mensagem;
        echo "<br>";
        echo "Nome.....:" . $produto->getNomeProduto();
        echo "<br>";
        echo "Marca.....:" . $produto->getMarca();
        echo "<br>";
        echo "Preco.....: R$ " . $produto->getPreco();
        echo "<br>";
        echo "Quantidade Cadastrada.....:" . $produto->getQuantidadeTotalCadastrada();
        echo "<br>";
        echo "Quantidade Disponivel.....:" . $produto->getQuantidadeDisponivel();
        echo "<br>";
        if ($produto->getQuantidadeDisponivel() == 0) {
            echo "PRODUTO NÃO DISPONIVEL EM ESTOQUE!";
            self::$totalDeProdutosCadastrados--;
        }
    }
}
?>