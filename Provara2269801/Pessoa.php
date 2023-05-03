<?php

class Pessoa
{
    protected $nome;
    protected $idade;
    protected $cpf;
    static $totalDePessoas;

    function __construct($nome, $idade, $cpf)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setIdade($idade);
        self::$totalDePessoas++;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {

        if ($nome == "")
            echo "Nome não pode ser vazio";
        else
            $this->nome = $nome;
        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): self
    {
        if ($idade < 0 && $idade > 99)
            echo "Nome não pode ser negativo e nem maior que 99";
        else
            $this->idade = $idade;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): self
    {

        if ($cpf == "")
            echo "cpf não pode ser vazio";
        else
            $this->cpf = $cpf;
        return $this;
    }
}
?>