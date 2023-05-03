<?php

require_once("Escola.php");
class Aluno extends Escola
{
    private $notas;
    private $faltas;
    private $ra;

    function __construct($nome, $idade, $cpf, $ra)
    {
        parent::__construct($nome, $idade, $cpf);
        $this->setRa($ra);
        Escola::adicionarAlunos();
    }

    public function getNotas()
    {
        return $this->notas;
    }

    public function setNotas($notas): self
    {
        if ($notas < 0 && $notas > 100)
            echo "Nota nao pode ser negativa e nem maior que 100";
        else
            $this->notas = $notas;
        return $this;
    }

    public function getFaltas()
    {
        return $this->faltas;
    }

    public function setFaltas($faltas): self
    {
        if ($faltas < 0 && $faltas > 50)
            echo "faltas nao podem ser negativas e nem maior que 50";
        else
            $this->faltas = $faltas;
        return $this;
    }

    public function getRa()
    {
        return $this->ra;
    }

    public function setRa($ra): self
    {
        if ($ra == "")
            echo "RA nao pode ser vazio";
        else
            $this->ra = $ra;
        return $this;
    }
}
?>