<?php

require_once("ItemCardapio.php");

class Salada extends ItemCardapio
{
    private string $ingredientesPrincipais;
    private bool $contemProteina;

    const acrescimoSalada = 1.10;

    public function __construct(int $idItem, string $descricao, float $preco, int $quantidade, Pedido $pedido, string $ingredientesPrincipais, bool $contemProteina)
    {
        parent::__construct($idItem, $descricao, $preco, $quantidade, $pedido);
        $this->setIngredientesPrincipais($ingredientesPrincipais);
        $this->setContemProteina($contemProteina);
    }

    public function getIngredientesPrincipais(): string
    {
        return $this->ingredientesPrincipais;
    }

    public function setIngredientesPrincipais(string $ingredientesPrincipais): self
    {
        if ($ingredientesPrincipais == "")
            echo "Ingredientes nao podem ser vazios";
        else
            $this->ingredientesPrincipais = $ingredientesPrincipais;
        return $this;
    }

    public function getContemProteina(): bool
    {
        return $this->contemProteina;
    }

    public function setContemProteina(bool $contemProteina): self
    {
        $this->contemProteina = $contemProteina;
        return $this;
    }

    public function calcularPrecoFinal(ItemCardapio $item)
    {
        $precoBase = $item->getQuantidade() * $item->getPreco();

        if (!$item->getContemProteina()) {
            $precoFinal = $precoBase * self::acrescimoSalada;
            $item->setPrecoCalculado($precoFinal);
        }

        parent::calcularPrecoFinal($item);
    }
}
?>