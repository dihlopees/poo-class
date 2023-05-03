<?php

require_once("Escola.php");

class Bibliotecario extends Escola
{
    private $horarioDeTrabalho;

    function __construct($nome, $idade, $cpf, $horarioDeTrabalho)
    {
        parent::__construct($nome, $idade, $cpf);
        $this->setHorarioDeTrabalho($horarioDeTrabalho);
        Escola::adicionarBibliotecarios();
    }

    public function getHorarioDeTrabalho()
    {
        return $this->horarioDeTrabalho;
    }

    public function setHorarioDeTrabalho($horarioDeTrabalho): self
    {
        if ($horarioDeTrabalho == "")
            echo "Horario de trabalho nao pode ser vazio";
        else
            $this->horarioDeTrabalho = $horarioDeTrabalho;
        return $this;
    }
}