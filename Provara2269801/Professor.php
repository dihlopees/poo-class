<?php

require_once("Escola.php");
class Professor extends Escola
{
    private $salarioPorAula;
    private $faltasDoProfessor;

    function __construct($nome, $idade, $cpf, $salarioPorAula, $faltasDoProfessor)
    {
        parent::__construct($nome, $idade, $cpf);
        $this->setSalarioPorAula($salarioPorAula);
        $this->setFaltasDoProfessor($faltasDoProfessor);
        Escola::adicionarProfessores();
    }

    public function getSalarioPorAula()
    {
        return $this->salarioPorAula;
    }

    public function setSalarioPorAula($salarioPorAula): self
    {
        if ($salarioPorAula < 0)
            echo "salario nao pode ser negativo";
        else
            $this->salarioPorAula = $salarioPorAula;
        return $this;
    }

    public function getFaltasDoProfessor()
    {
        return $this->faltasDoProfessor;
    }

    public function setFaltasDoProfessor($faltasDoProfessor): self
    {
        if ($faltasDoProfessor < 0 && $faltasDoProfessor > 20)
            echo "Falta do professor nao pode ser maior que 20 e nem negativas";
        else
            $this->faltasDoProfessor = $faltasDoProfessor;
        return $this;
    }

    public function atribuirNota(Aluno $aluno, int $nota)
    {
        parent::atribuirNota($aluno, $nota);
    }

    public function atribuirFaltaAoAluno(Aluno $aluno, int $falta)
    {
        parent::atribuirFaltaAoAluno($aluno, $falta);
    }
}